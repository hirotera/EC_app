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

                    ログインに成功しました!<br>

                    <a href="index"><p class="mt-4">管理者メニューへ</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
