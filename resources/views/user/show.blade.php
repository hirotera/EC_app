@extends('layouts.app')

@section('content')
<div class="container-fluid">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#ffffff; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">ダンディなアイテムの詳細</h1>
               <div class="d-flex flex-row flex-wrap">           
                    <div class="col-xs-6 col-sm-4 col-md-8 mx-auto">
                        <div class="mycart_box">
                            <h1>{{$stock->name}}</h1> <br>
                            <h2>{{number_format($stock->price)}}円</h2><br>
                            <img src="/image/{{$stock->imgpath}}" alt="" class="incart img-thumbnail" >
                            <br>
                             {!! nl2br(e($stock->recommended)) !!} <br>
                            <form action="mycart" method="post">
                                @csrf
                                <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                <input type="submit" value="カートに入れる">
                            </form>
                        </div>
                    </div>               
                </div>
                    <a  href="shop"><p class="text-center mt-5">ダンディなアイテムtopへ</p></a>
            </div>
       </div>
   </div>
@endsection