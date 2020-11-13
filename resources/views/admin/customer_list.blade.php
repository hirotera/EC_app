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

                    顧客情報一覧              
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">名前</th>
                        <th scope="col">電話番号</th>
                        <th scope="col">郵便番号</th>
                        <th scope="col">都道府県</th>
                        <th scope="col">市区町村</th>
                        <th scope="col">丁目､番地</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($customers as $customer)
                    <tr>
                      <th>{{ $customer->id }} </th>
                      <td>{{ $customer->name }}</td>
                      <td>{{ $customer->phonenumber }}</td>
                      <td>{{ $customer->postalcode }}</td>
                      <td>{{ $customer->region }}</td>
                      <td>{{ $customer->addressline1 }}</td>
                      <td>{{ $customer->addressline2 }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                  <a href="index"><p class="mt-4">管理者メニューへ戻る</p></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection