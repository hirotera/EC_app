@extends('layouts.user.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body text-body">
                        {{ Auth::user()->name }}様<br>
                        この度はマダムMでのご購入ありがとうございます。<br>
                        
                        <div class="card-body">
                            <p>ご登録頂いたメールアドレスへ決済情報をお送りしております。<br>
                                お手続き完了次第商品を発送致します。</p>
                        </div>
                        ダンディの世界へ､ようこそ<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection