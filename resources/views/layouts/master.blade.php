<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>@yield('title') | sake </title>
<meta name="description" itemprop="description" content="@yield('description')">
<meta name="keywords" itemprop="keywords" content="@yield('keywords')">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/common/style.css" rel="stylesheet">
<link href="css/common/style-desktop.css" rel="stylesheet">
<link href="css/common/style-mobile.css" rel="stylesheet">
<link href="css/common/style-1000px.css" rel="stylesheet">
<link href="css/common/skel-noscript.css" rel="stylesheet">
<script src="js/common.jquery.min.js"></script>
<script src="js/common/skel.min.js"></script>
<script src="js/common/skel-panels.min.js"></script>
<script src="js/common/init.js"></script>
@yield('css')
@yield('js')
</head>
<body class="homepage">
//header,navbar
    <div id="header">
        <div class="container">
            <div id="logo">
                <h1>
                    <a href="index.php">酒</a>
                </h1>
            </div>
            <nav id="nav">
                <ul>
                    <li class="active"><a href="login.html">ログイン</a></li>
                    <li><a href="create.html">新規会員登録</a></li>
					<li><a href="cart"><i class="fa fa-shopping-cart fa-3x fa-white"></i></a></li>
                </ul>
            </nav>
        </div>
	   </div>
      </div>

//main
      <div id="main">
       <div class="container">
        @yield('main')
       </div>
       </div>

//footer
    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <p> Copyright 2016 All Rights Reserved.</p>
        </div>
    </div>

</body>
</html>