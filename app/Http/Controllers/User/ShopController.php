<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stock;
use App\Models\Cart;
use App\Models\User;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Mail;
// use App\Mail\Thanks;

class ShopController extends Controller
{
    public function index()
    {

        $stocks = Stock::Paginate(6);
        return view('user.shop', compact('stocks'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $query = DB::table('stocks');
        if($search != null){
            $query->where('category');
        }
            $query->select('category');

        // ddd($query);

        $stocks = Stock::where('category', $search)->paginate(6);
        // ddd($stocks);
        return view('user.shop', compact('stocks'));
    }
    
    public function show(Stock $stock)
    {
        return view('user.show',['stock' =>$stock]);
    }

    public function myCart(Cart $cart)
    {
        $data = $cart->showCart();
        return view('user.mycarts', $data);
    }

    
    public function addMycart(Request $request, Cart $cart)
    {
        $stock_id = $request->stock_id;
        $message = $cart->addCart($stock_id);

        $data = $cart->showCart();

        return view('user.mycarts', $data)->with('message', $message); 
    }

    public function deleteCart(Request $request, Cart $cart)
    {
        $stock_id = $request->stock_id;
        $message = $cart->deleteCart($stock_id);

        $data = $cart->showCart();

        return view('user.mycarts', $data)->with('message', $message); 
    }
  
    public function checkout(Request $request, Cart $cart)    
    {
        
        $data = $cart->showCart();
        return view('user.private_data', $data); 
    }
    
    public function sendData(Request $request,Cart $cart)
    {
        if($request->has('post')){
            // $user = Auth::user();
            // $mail_data['user'] = $user->name; 
            // $mail_data['checkout_items'] = $cart->checkoutCart(); 
            // Mail::to($user->email)->send(new Thanks($mail_data));

            $user_data = Auth::user();

            $user_data->real_name = $request->input('real_name');
            $user_data->postalcode = $request->input('postalcode');
            $user_data->region= $request->input('region');
            $user_data->addressline1 = $request->input('addressline1');
            $user_data->addressline2 = $request->input('addressline2');
            $user_data->phonenumber = $request->input('phonenumber');

            $user_data->save();

            $data = $cart->showCart();
            return view('user.complete',$data);
        }
            $request->flash();
            $data = $cart->showCart();
            return view('user.private_data', $data);         
    }

    
    
}