@extends('layouts.user.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-body">
                        {{ Auth::user()->name }}様お届け先入力
                    </div>
                    <div class="card-body">
                        <form method="POST" action="sendData">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6 text-body">
                                    <label for="real_name">氏名</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('real_name') }}</p>
                                        <input id="real_name" type="hidden" name="real_name" value="{{ old('real_name') }}">
                                    @else
                                        <input id="real_name" type="text" class="form-control" name="real_name" value="{{ old('real_name') }}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-2 text-body">
                                    <label for="postalcode">郵便番号</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('postalcode') }}</p>
                                        <input id="postalcode" type="hidden" name="postalcode" value="{{ old('postalcode') }}">
                                    @else
                                        <input id="postalcode" type="text" class="form-control" name="postalcode" value="{{ old('postalcode') }}">
                                    @endif
                                </div>
                                <div class="form-group col-md-4 text-body">
                                    <label for="region">都道府県</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('region') }}</p>
                                        <input id="region" type="hidden" name="region" value="{{ old('region') }}">
                                    @else
                                        <select id="region" class="form-control" name="region">
                                            @foreach(Config::get('region') as $value)
                                                <option @if(old('region') == $value) selected @endif>{{ $value }}</option>
                                            @endforeach
                                        </select>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6 text-body">
                                    <label for="addressline1">市区町村</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('addressline1') }}</p>
                                        <input id="addressline1" type="hidden" name="addressline1" value="{{ old('addressline1') }}">
                                    @else
                                        <input id="addressline1" type="text" class="form-control" name="addressline1" value="{{ old('addressline1') }}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-row mb-1">
                                <div class="form-group col-md-6 text-body">
                                    <label for="addressline2">丁目､番地､マンション名など</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('addressline2') }}</p>
                                        <input id="addressline2" type="hidden" name="addressline2" value="{{ old('addressline2') }}">
                                    @else
                                        <input id="addressline2" type="text" class="form-control" name="addressline2" value="{{ old('addressline2') }}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-row mb-1 text-body">
                                <div class="form-group col-md-6">
                                    <label for="phonenumber">電話番号</label>
                                    @if(Request::has('confirm'))
                                        <p class="form-control-static">{{ old('phonenumber') }}</p>
                                        <input id="phonenumber" type="hidden" name="phonenumber" value="{{ old('phonenumber') }}">
                                    @else
                                        <input id="phonenumber" type="text" class="form-control" name="phonenumber" value="{{ old('phonenumber') }}">
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 text-body">
                                    @if(Request::has('confirm'))
                                        <button type="submit" class="btn btn-primary" name="post">注文を確定する</button>
                                        <button type="submit" class="btn btn-default" name="back">修正する</button>
                                    @else
                                        <button type="submit" class="btn btn-primary" name="confirm">入力内容を確認する</button>
                                    @endif
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center font-weight-bold" style="color:#ffffff;  font-size:1.2em; padding:24px 0px;">
           {{ Auth::user()->name }}様のカートの中身</h1>
        @foreach($my_carts as $my_cart)
            <div class="mycart_box">
                {{$my_cart->stock->name}} <br>                                
                {{ number_format($my_cart->stock->price)}}円 <br>
                <img src="/image/{{$my_cart->stock->imgpath}}" alt="" class="incart" >
                <br>
            </div>
        @endforeach
        <div class="text-center p-2">
            個数：{{$count}}個<br>
            <p style="font-size:1.2em; font-weight:bold;">合計金額:{{number_format($sum)}}円</p>  
        </div>  
    </div>
@endsection