@extends('layouts.user.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-body">
                        <p >{{ Auth::user()->name }}様</p>
                        <p>この度はマダムMでのご購入ありがとうございます。</p>
                         <p>{{ Auth::user()->name }}様が購入したのはこちらのアイテムです｡</p>
                            @foreach($my_carts as $my_cart)
                                {{-- <div class="mycart_box"> --}}
                                    {{$my_cart->stock->name}} <br>                                
                                    {{ number_format($my_cart->stock->price)}}円 <br>
                                    {{-- <img src="/image/{{$my_cart->stock->imgpath}}" alt="" class="incart" > --}}
                                    <br>
                                {{-- </div> --}}
                            @endforeach
                        <div class="card-body">
                             <div class="p-2">
                                個数：{{$count}}個<br>
                                <p style="font-size:1.2em; font-weight:bold;">合計金額:{{number_format($sum)}}円</p>  
                            </div>  

                            <p>振込先</p>
                            <p>ダンディ銀行ジロラモ支店</p>
                            <p>普通************</p>
                            <p>マダムM </p>                           
                        </div>
                        <p>入金確認後､発送とさせていただきます｡</p>
                        <p>ダンディの世界へ､ようこそ</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection