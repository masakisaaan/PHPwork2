@extends('layouts.master')

@section('title', 'Order')

@section('css')
    <link href="/css/pages/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection


@section('main')
<div class="container-fruid tablemargin">
    <table class="table table-responsive">
  <thead>
    <tr>
      <th class="text-center" style="width:35%;">商品名</th>
      <th class="text-center">価格</th>
    </tr>
  </thead>
  <tbody>
@foreach($items as $index=>$item)
    <tr>
      <td class="text-center">{{$item->item_name}}</td>
      <td class="text-center">{{ $item->price }}</td>
    </tr>
@endforeach
  </tbody>
</table>
</div>


<div class="pay" style="float:left; margin-left:220px;">
<div class="radio">
  <label><input type="radio" name="optradio">代金引換</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">クレジット決済</label>
</div>
</div>

<div class="totalline table">
<ul class="table table-responsive" style="width:20%; float:right; margin-top:20px;">
<li class="table">
<th class="text-center" style="width:20%;">送料</th>
<td class="text-center" style="width:20%;">　　　   600円</td>
</li>
<li class="table">
<th class="text-center" style="width:20%;">合計金額</th>
<td class="text-center" style="width:20%;">　{{ $ntotal }}円</td>
</li>
</ul>
</div>

<form action="/cart/clear" method="post" style="margin-left:80%;">
{{ csrf_field() }}
<button type="button" class="btn btn-primary" onclick="history.back()">戻る</button>
<a href="/order/complete"><button type="button" class="btn btn-primary">注文確定</button></a>
</form>
@endsection