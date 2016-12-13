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
<img src="{{ $alcohol->img }}" class="img-responsive" id="detailimg" alt="#">
</div>
<div class="col-sm-3" id="detailname">
<p class="text-center component">{{$alcohol->name}}</p>
<p class="text-center component">{{$alcohol->description}}</p>
<p class="text-center component">{{$alcohol->price}}円</p>
<form action="/cart?id={{$alcohol->id}}" method="post">
<div class="form-group form-inline stockarea">
{{ csrf_field() }}
    <label for="exampleSelect1">数量:</label>
    <select class="form-control" id="exampleSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  <button type="submit" class="btn btn-danger cartbutton" value="カートに入れる">カートに入れる</button>
</div>
</form>

</div>
</div>
</div>

@endsection