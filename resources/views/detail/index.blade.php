@extends('layouts.master')

@section('title', 'Home')

@section('css')
    <link href="/css/index/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection

@section('main')

<div class="container-fruid">
<div class="row">
<div class="col-sm-8">
<img src="{{ $alcohol->img }}" class="img-responsive" alt="#">
<p>{{$alcohol->name}}</p>
</div>
<div class="col-sm-4">
<p>{{$alcohol->description}}</p>
</div>
</div>
</div>

@endsection