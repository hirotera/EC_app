@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-body">管理者ページ</div>

                <div class="card-body text-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h2>管理者メニュー</h2>
                        <a href="list"><p class="mt-4">商品一覧ページへ</p></a>
                        <a href="create"><p class="mt-4">商品登録ページへ</p></a>
                        <a href="customer_list"><p class="mt-4">顧客情報ページへ</p></a>                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection