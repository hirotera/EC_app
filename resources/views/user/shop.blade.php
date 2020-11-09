@extends('layouts.user.app')

@section('content')
<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#ffffff; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">ダンディなアイテム一覧</h1>
           <div class="justify-content-end">
                <form action="{{ route('user.search') }}" method="post">
                    @csrf
                    <select name="search" class="custom-select col-4">
                        <option disabled selected value>お探しのダンディなアイテムは何かしら?</option>
                        <option value="時計">時計</option>
                        <option value="万年筆">万年筆</option>
                        <option value="靴">靴</option>
                        <option value="手帳">手帳</option>
                        <option value="眼鏡">眼鏡</option>
                        <option value="鞄">鞄</option>
                        <option value="財布">財布</option>
                        <option value="傘">傘</option>
                        <option value="シャツ&ネクタイ">シャツ&ネクタイ</option>
                        <option value="スーツ">スーツ</option>
                    </select>
                    <button class="btn btn-success my-2 my-sm-0" type="submit">絞り込む</button>
                </form>
            </div>
           <div class="">
               <div class="d-flex flex-row flex-wrap">
           
                       @foreach($stocks as $stock)
                            <div class="col-xs-6 col-sm-4 col-md-4 ">
                               <div class="mycart_box">
                                   {{$stock->name}} <br>
                                   {{number_format($stock->price)}}円<br>
                                   <img src="/image/{{$stock->imgpath}}" alt="" class="incart" >
                                   <br>
                                   {{$stock->detail}} <br>
                                   <a href="stock/{{ $stock->id }}"><p class="text-info">詳細を見る</p></a>
                                   <form action="mycart" method="post">
                                       @csrf
                                       <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                       <input type="submit" value="カートに入れる">
                                   </form>
                               </div>
                            </div>
                        @endforeach                    
                        </div>
                        <div class="text-center" style="width: 200px;margin: 20px auto;">
                            {{  $stocks->links()}} 
                            <a class="text-center" href="shop">ダンディなアイテムtopへ</a>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection