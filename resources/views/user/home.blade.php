@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-body">Dashboard</div>

                <div class="card-body text-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    ログインに成功しました!<br>
                    <a href="shop"><p class="text-center mt-4">ダンディなアイテムtopへ</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
