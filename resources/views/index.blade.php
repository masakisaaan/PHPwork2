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
<img src="{{  $alcohol->img }}" class="img-responsive" alt="#"></a>
<h2 class="itemname">{{$alcohol->name}}</h2>
<p class="price">¥{{ $alcohol->price }}<span>(税込)</span></p>
<div class="itembutton">
<a href="/detail?id={{ $alcohol->id }}"><button type="button" class="btn btn-success detail-button">詳細</button>
<!-- 遷移先を"/welcome"に変更 -->
<form action="/welcome" method="POST">
<script
  src="https://checkout.stripe.com/checkout.js" class="stripe-button"
  data-key="sk_test_OiFzPckKmAKXJym3InTlddXa"　<!-- ここにAPIキーをコピペ -->
  data-amount="1000"　<!-- 表示する課金額を記入 -->
  data-name="TEST"
  data-description="TESTTEST"
  data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
  data-locale="ja"<!-- autoでも日本語表示になりましたが、念のためjaに変更 -->
  data-currency="jpy">
        <!-- LaravelユーザーはCSRFトークン忘れずに。 -->
        //$.ajaxSetup({
        //    headers: {
        //        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //    }
        //})
</script>
</form>
</a>
<button type="button" class="btn btn-danger cart-button">カートに入れる</button>
</div>
</div>

@endforeach

</div>
</div>

@endsection