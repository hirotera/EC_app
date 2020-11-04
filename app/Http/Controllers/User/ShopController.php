<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stock;
use App\Models\Cart;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use App\Mail\Thanks;

class ShopController extends Controller
{
    public function index()
    {
        // $search = $request->input('search');
        // $query = DB::table('stocks');
        // $query->select('category')

        $stocks = Stock::Paginate(6);
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

    // public function checkout()    
    public function checkout(Request $request, Cart $cart)    
    {
        // $mail_data['user'] = $user->name; 
        // $mail_data['checkout_items'] = $cart->checkoutCart(); 
        // Mail::to($user->email)->send(new Thanks($mail_data)); 
        // return view('checkout');
        $data = $cart->showCart();
        // $message = $cart->checkout($stock_id);
        return view('user.private_data', $data); 
    }
    
    public function sendData(Request $request ,Cart $cart)
    {
        if($request->has('post')){
            $data = $cart->showCart();
            $checkout_items = $cart->checkoutCart(); 
            return view('user.complete',$data,);
        }
            $request->flash();
            $data = $cart->showCart();
            return $this->checkout();        
    }
    
}