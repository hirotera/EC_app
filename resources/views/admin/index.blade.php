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
                        <h1>管理者メニュー</h1>
                    <a href=" {{ route('admin.create') }}"><p class="mt-4">商品登録ページへ</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection