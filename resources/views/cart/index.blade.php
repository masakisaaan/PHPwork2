@extends('layouts.master')

@section('title', 'Cart')

@section('css')
    <link href="/css/pages/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection


@section('main')

<div class="container-fruid tablemargin">
    <table class="table table-bordered table-responsive ">
  <thead>
    <tr>
      <th>商品名</th>
      <th>価格</th>
      <th>数量</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($alcohols as $alcohol)
    <tr>
      <td>{{$alcohol->name}}</td>
      <td>{{$alcohol->description}}</td>
      <td>{{$alcohol->price}}</td>
      <td></td>
    </tr>
@endforeach
  </tbody>
</table>

</div>


<form action="/cart/clear" method="post">
{{ csrf_field() }}
<button type="submit" class="btn btn-primary" value="カートの中身をリセット">カートの中身をリセット</button>
<a href="/">戻る</a>
</form>

@endsection