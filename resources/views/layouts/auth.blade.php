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
	<link href="/css/pages/index.css" rel="stylesheet">
	<link href="/css/common/style.css" rel="stylesheet">
    <link href="/css/common/reset.css" rel="stylesheet">
    <script src="/js/common/jquery.min.js"></script>
    <script src="/js/common/bootstrap.min.js"></script>
</head>
@yield('css')
@yield('js')

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

