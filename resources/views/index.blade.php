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
@foreach($alcohol as $alcohol)
<div class="col-xs-12 col-sm-6 col-md-4">
<a href="/detail?id=1"><img src="{{  $alcohol->img }}" class="img-responsive" alt="#"></a>
<h2 class="itemname">{{$alcohol->name}}</h2>
<p class="price">¥{{ $alcohol->price }}<span>(税込)</span></p>
</div>

@endforeach

</div>
</div>

@endsection