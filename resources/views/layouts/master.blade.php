<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title') | sake </title>
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
				<li><a href="/auth/login">ログイン</a></li>
				<li><a href="/auth/register">新規会員登録</a></li>
				<li><a href="/cart">(カート)</a></li>
			</ul>
	</div>
</nav>


        @yield('main')

    <footer class="footer">
  <div class="container">
    <p class="text-muted">Copyright 2016 All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>