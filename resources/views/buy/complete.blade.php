@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center" style="margin-bottom:10px;">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{ $user }}様<br>
                        この度はmadam Mでのご購入ありがとうございます。<br>
                        ダンディの世界へようこそ<br>
                        {{ $user }}様が購入した商品は<br>
                        @foreach ($checkout_items as $item)
                        ・{{ $item->stock->name }}｜{{ number_format($item->stock->price) }}円
                        <br>
                        @endforeach
                        となります。<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection