<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title') | 酒 </title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <link href="/css/common/font-awesome.min.css" rel="stylesheet">
    <link href="/css/common/bootstrap.min.css" rel="stylesheet">
	<link href="/css/index/index.css" rel="stylesheet">
	<link href="/css/common/style.css" rel="stylesheet">
    <link href="/css/common/reset.css" rel="stylesheet">
    <script src="/js/common/jquery.min.js"></script>
    <script src="/js/common/bootstrap.min.js"></script>
</head>
@yield('css')

</head>
<body>

<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample7">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">
				酒
			</a>
		</div>
		
		<div class="collapse navbar-collapse" id="navbarEexample7">
			<ul class="nav navbar-nav navbar-right">
					    @if (Auth::guest())
                    {{-- ログインしていない時 --}}

                <li><a href="/login">ログイン</a></li>
				<li><a href="/register">新規会員登録</a></li>
				<li><a href="/cart"><i class="fa fa-shopping-cart fa-mycolor fa-cart" aria-hidden="true"></i></a></li>
                @else
                    {{-- ログインしている時 --}}
				<li><a href="/cart"><i class="fa fa-shopping-cart fa-mycolor fa-cart" aria-hidden="true"></i></a></li>
				<li><a id="sampleButton"><i class="fa fa-btn fa-sign-out"></i>ログアウト</a>

				<div class="modal fade" id="sampleModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span>×</span></button>
				<h4 class="modal-title">ログアウト</h4>
			</div>
			<div class="modal-body">
				<p>本当にログアウトしますか？</p>
				<!-- <span>ログアウトすると、トップページに戻ります</span> -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">いいえ</button>
				<a href="/logout"><button type="button" class="btn btn-primary">はい</button></a>
			</div>
		</div>
	</div>
</div>

				</li>
				@endif
			</ul>
	</div>
</nav>


        @yield('main')

    <footer class="footer">
  <div class="container">
    <p class="text-muted">Copyright 2016 All Rights Reserved.</p>
  </div>
</footer>
<script>
$( function() {
	$('#sampleButton').click( function () {
		$('#sampleModal').modal();
	});
});
</script>
</body>
</html>