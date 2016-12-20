@extends('layouts.master')

@section('title', 'Detail')

@section('css')
    <link href="/css/pages/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection

@section('main')

<div class="container-fruid">
<div class="row">
<div class="col-sm-7">
<img src="{{ $item->item_img }}" class="img-responsive" id="detailimg" alt="#">
</div>
<div class="col-sm-3" id="detailname">
<p class="text-center component">{{$item->item_name}}</p>
<p class="text-center component">{{$item->description}}</p>
<p class="text-center component">{{$item->price}}円</p>
<form action="/cart?id={{ $item->id }}" method="post">
<div class="form-group form-inline stockarea">
{{ csrf_field() }}
  <button type="submit" class="btn btn-danger cartbutton" value="カートに入れる">カートに入れる</button>
</div>
</form>

</div>
</div>
</div>

@endsection