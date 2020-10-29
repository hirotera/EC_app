@component('mail::message')

{{ $user }}様<br>
この度はmadam Mでのご購入ありがとうございます。<br>
ダンディの世界へようこそ<br>

お客様が購入した商品は<br>

@foreach ($checkout_items as $item)
・{{ $item->stock->name }}｜{{ number_format($item->stock->price) }}円
<br>
@endforeach

となります。<br>
下記の決済画面より決済を完了させてください。<br>

@component('mail::button', ['url' => ''])
決済画面へ
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent
