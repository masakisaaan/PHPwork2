@extends('layouts.master')

@section('title', 'Cart')

@section('css')
    <link href="/css/pages/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection


@section('main')
<form action="/order" method="post">
<div class="container-fruid tablemargin">
@if($items) <!-- 商品が入っている時 -->
    <table class="table table-responsive">
  <thead>
    <tr>
      <th class="text-center" style="width:35%;">商品名</th>
      <th class="text-center">価格</th>
      <th class="text-center">削除</th>
    </tr>
  </thead>
  <tbody>
@foreach($items as $index=>$item)
    <tr>
      <td class="text-center">{{$item->item_name}}</td>
      <td class="text-center">{{ $item->price }}円</td>
      <td class="text-center"><a href="/cart/delete?index={{ $index }}" class="btn btn-primary">削除</a></td>
      </form>
    </tr>
@endforeach


  </tbody>
</table>
</div>
</form>

<div class="totalline table">
<table class="table table-responsive" style="width:20%; float:right; margin-right:100px; margin-top:20px;">
<th class="text-center" style="width:20%;">合計金額</th>
<td class="text-center" style="width:20%;">{{ $total }}円</td>
</table>
</div>

<form action="/cart/clear" method="post" style="margin-left:72%;">
{{ csrf_field() }}
<button type="submit" class="btn btn-primary" value="カートの中身をリセット">カートの中身をリセット</button>
<button type="button" class="btn btn-primary" onclick="history.back()">戻る</button>
<a href="/order"><button type="button" class="btn btn-primary">注文</button></a>
</form>

<!-- 商品が空の時 -->
@else
<div class="text-center">
<h1 class="text-center">カートに商品は入っていません。</h1>
<ul>
<li><a href="/" class="btn btn-primary" style="margin-top:15px;">ショッピングを続ける</a></li>
</ul>
</div>
@endif
</div>

@endsection