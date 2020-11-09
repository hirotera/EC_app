@extends('layouts.user.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 class="text-center font-weight-bold" style="color:#ffffff;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}さんのカートの中身</h1>

           <div class="card-body">
               <p class="text-center">{{ $message ?? ''}}</p><br>
               
               @if($my_carts->isNotEmpty()) 
                   @foreach($my_carts as $my_cart)
                       <div class="mycart_box">
                           {{$my_cart->stock->name}} <br>                                
                           {{ number_format($my_cart->stock->price)}}円 <br>
                           <img src="/image/{{$my_cart->stock->imgpath}}" alt="" class="incart" >
                           <br>
                           <form action="cartdelete" method="post">
                               @csrf
                               <input type="hidden" name="delete" value="delete">
                               <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                               <input type="hidden" name="stock_id" value="{{ $my_cart->stock->id }}">
                               <input type="submit" value="カートから削除する">
                           </form>
                       </div>
                   @endforeach
                   <div class="text-center p-2">
                       個数：{{$count}}個<br>
                       <p style="font-size:1.2em; font-weight:bold;">合計金額:{{number_format($sum)}}円</p>  
                   </div>  
                   <a href="{{ route('user.index') }}" ><p class="text-center">ダンディなアイテムをさらに探す</p></a>
                   <form action="checkout" method="POST">
                       @csrf
                       <button type="submit" class="btn btn-danger btn-lg text-center buy-btn" >レジに進む</button>
                   </form>
               @else
                   <p class="text-center">カートにダンディなアイテムは入っていません</p>
                   <a href="{{ route('user.index') }}" ><p class="text-center mt-4">ダンディなアイテムを探す</p></a>
               @endif
           </div>

           </div>
       </div>
   </div>
</div>
@endsection