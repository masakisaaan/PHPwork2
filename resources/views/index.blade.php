@extends('layouts.master')

@section('title', 'Home')

@section('css')
    <link href="/css/index/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection

@section('main')
<div class="container-fluid">
<div class="title">
<h1 class="category">Whisky</h1>
</div>	
				
<div class="row">
@foreach($item as $item)
<div class="col-xs-12 col-sm-6 col-md-4">
<img src="{{  $item->item_img }}" class="img-responsive" alt="#"></a>
<h2 class="itemname">{{$item->item_name}}</h2>
<p class="price">¥{{ $item->price }}<span>(税込)</span></p>
<div class="itembutton">
<a href="/detail?id={{ $item->id }}"><button type="button" class="btn btn-success detail-button">詳細</button>
</a>
</div>
</div>

@endforeach

</div>
</div>

@endsection