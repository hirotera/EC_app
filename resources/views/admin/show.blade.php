@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#ffffff; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">ダンディなアイテムの詳細</h1>
               <div class="d-flex flex-row flex-wrap">           
                    <div class="col-xs-6 col-sm-4 col-md-8 mx-auto">
                        <div class="mycart_box text-left">
                            <h1>商品名:{{$stock->name}}</h1> <br>
                            <h2>種類: {{ $stock->category }}</h2>
                            <h2>価格:{{number_format($stock->price)}}円</h2><br>
                            <img src="/image/{{$stock->imgpath}}" alt="" class="incart img-thumbnail" >
                            <h2 class="text-body">商品画像パス:{{ $stock->imgpath }}</h2>
                            <h2 class="text-body">一言説明 : {{ $stock->detail }}</h2>
                            <br>
                             <h2>詳細な説明:</h2><br>
                              {!! nl2br(e($stock->recommended)) !!} <br>
                              <form action="{{ route('admin.edit',['id'=>$stock->id]) }}" method="get">
                                @csrf
                                <input type="hidden" name="stock_id" value="{{ $stock->id }}">
                                <input type="submit" value="変更する" class="btn btn-info btn-lg mt-4">
                              </form>
                            </div>
                    </div>               
                </div>
            </div>
       </div>
   </div>
@endsection