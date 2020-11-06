@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-body">管理者ページ</div>

                <div class="card-body text-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    一覧              
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">商品名</th>
                        <th scope="col">種類</th>
                        <th scope="col">価格</th>
                        <th scope="col">詳細</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($stocks as $stock)
                    <tr>
                      <th>{{ $stock->id }} </th>
                      <td>{{ $stock->name }}</td>
                      <td>{{ $stock->category }}</td>
                      <td> {{number_format($stock->price) }} </td>
                      <td> <a href="list/stock/{{ $stock->id }}">詳細を見る</a></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection