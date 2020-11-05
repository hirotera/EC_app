@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          
          <h1 class="text-body">新規商品登録</h1>

          <form action="store" method="post">
            @csrf
            <div class="text-body form-group mt-4 mb-0">商品名</div>
            <input type="text" name="name" class="form-control">
            
            <div class="text-body form-group mt-4 mb-0">一言説明</div>
            <input type="text" name="detail" class="form-control">

            <div class="form-group text-body mt-4 mb-0">
              <label for="exampleFormControlTextarea1">詳細な説明</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="recommended"></textarea>              
            </div>

            <div class="text-body form-group mt-4 mb-0">種類</div>
            <select class="form-control" id="exampleFormControlSelect1" name="category">
              <option value="">無し</option>
              <option value="時計">時計</option>
              <option value="万年筆">万年筆</option>
              <option value="靴">靴</option>
              <option value="手帳">手帳</option>
              <option value="眼鏡">眼鏡</option>
              <option value="鞄">鞄</option>
              <option value="財布">財布</option>
              <option value="傘">傘</option>
              <option value="シャツ&ネクタイ">シャツ&ネクタイ</option>
              <option value="スーツ">スーツ</option>                        
           </select>

           {{-- <div class="text-body form-group mt-4 mb-0">上記になければ種類を追加する</div>
            <input type="text" name="category" class="form-control" > --}}
          
            <div class="text-body form-group mt-4 mb-0">価格</div>
            <input type="number" name="price" class="form-control">

            <div class="text-body form-group mt-4 mb-0">画像パス</div>
            <input type="text" name="imgpath" class="form-control">

            <input class="btn btn-lg btn-info mt-4 mb-0" type="submit" value="登録する">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection