<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use illuminate\Supporot\Facades\Auth;

class BuyController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('checkout');
    }

    public function checkout(Request $request)
    {
        if($request->has('post')){
            $user_id = Auth::id();
            $checkout_items = $this->where('user_id', $user_id)->get();
            $this->where('user_id', $user_id)->delete();
            return view('user/buy/complete');
        }
        $request->flash();
        return $this->index();
    }
}
