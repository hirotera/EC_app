<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Stock;
use App\Models\Cart;

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
        return view('show',['stock' =>$stock]);
    }

    public function myCart(Cart $cart)
    {
        $data = $cart->showCart();
        return view('mycarts', $data);
    }

    
    public function addMycart(Request $request, Cart $cart)
    {
        $stock_id = $request->stock_id;
        $message = $cart->addCart($stock_id);

        $data = $cart->showCart();

        return view('mycarts', $data)->with('message', $message); 
    }

    public function deleteCart(Request $request, Cart $cart)
    {
        $stock_id = $request->stock_id;
        $message = $cart->deleteCart($stock_id);

        $data = $cart->showCart();

        return view('mycarts', $data)->with('message', $message); 
    }

    public function checkout(Request $request, Cart $cart)
    {

        $user = Auth::user();
        $mail_data['user'] = $user->name; 
        $mail_data['checkout_items'] = $cart->checkoutCart(); 
        Mail::to($user->email)->send(new Thanks($mail_data)); 
        return view('checkout');
    }
}
