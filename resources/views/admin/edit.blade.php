@extends('layouts.admin.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-body">商品情報変更ページ</div>

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
          
          <h1 class="text-body">商品情報変更</h1>

          <form action="{{ route('admin.update',['id'=>$stock->id]) }}" method="post">
            @csrf
            <h3 class="text-body form-group mt-4 mb-0">商品名</h3>
            <input type="text" name="name" class="form-control" value="{{ $stock->name }}">
            
            <h3 class="text-body form-group mt-4 mb-0">一言説明</h3>
            <input type="text" name="detail" class="form-control" value="{{ $stock->detail }}">

            <h3 class="form-group text-body mt-4 mb-0">
              <label for="exampleFormControlTextarea1">詳細な説明</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" 
              rows="10" name="recommended" >{!! nl2br(e($stock->recommended)) !!}</textarea>              
            </h3>

            <h3 class="text-body form-group mt-4 mb-0">種類</h3>
            <select class="form-control" id="exampleFormControlSelect1" name="category" value="">
              <option value="">無し</option>
              <option value="時計" @if($stock->category === "時計" ) selected @endif>時計</option>
              <option value="万年筆" @if($stock->category === "万年筆" ) selected @endif>万年筆</option>
              <option value="靴" @if($stock->category === "靴" ) selected @endif>靴</option>
              <option value="手帳" @if($stock->category === "手帳" ) selected @endif>手帳</option>
              <option value="眼鏡" @if($stock->category === "眼鏡" ) selected @endif>眼鏡</option>
              <option value="鞄" @if($stock->category === "鞄" ) selected @endif>鞄</option>
              <option value="財布" @if($stock->category === "財布" ) selected @endif>財布</option>
              <option value="傘" @if($stock->category === "傘" ) selected @endif>傘</option>
              <option value="シャツ&ネクタイ" @if($stock->category === "シャツ&ネクタイ" ) selected @endif>シャツ&ネクタイ</option>
              <option value="スーツ" @if($stock->category === "スーツ" ) selected @endif>スーツ</option>                        
           </select>

           {{-- <h3 class="text-body form-group mt-4 mb-0">上記になければ種類を追加する</h3>
            <input type="text" name="category" class="form-control" > --}}
          
            <h3 class="text-body form-group mt-4 mb-0">価格</h3>
            <input type="number" name="price" class="form-control" value="{{ $stock->price }}">

            <h3 class="text-body form-group mt-4 mb-0">画像パス</h3>
            <input type="text" name="imgpath" class="form-control" value="{{ $stock->imgpath }}">
           
            <input class="btn btn-lg btn-info mt-4 mb-0" type="submit" value="更新する">
            <a href="list"><p class="text-right">更新せずに一覧へ戻る</p></a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection