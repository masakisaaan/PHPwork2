<!DOCTYPE HTML>
<html>
<head>
    <title>Alcohol</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->

	    <script type="text/javascript" charset="utf-8">
        $(window).load(function() {
            $('.flexslider').flexslider();
        });
    </script>
</head>

<body class="homepage">

    <!-- Header -->
    <div id="header">
        <div class="container">

            <!-- Logo -->
            <div id="logo">
                <h1>
                    <a href="index.php">Alcohol</a>
                </h1>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="active"><a href="login.html">ログイン</a></li>
                    <li><a href="create.html">新規会員登録</a></li>
					<li class="cart"><a href="cart"><img src="images/cart.png"></a>
                    
                </ul>
            </nav>
        </div>
	</div>

	    <div class="flexslider">
        <ul class="slides">
            <li><img src="images/slider1.png" /></li>
			<li><img src="images/slider1.png" /></li>
			<li><img src="images/slider1.png" /></li>
			<li><img src="images/slider1.png" /></li>

        </ul>
    </div>

	<div id="marketing">
        <div class="title">
        <h1>Whisky</h1>
        </div>
			<div class="container">
				<div class="row">
				@foreach($alcohol as $alcohol)
					<div class="3u">
					
						<section>
							<a href="/detail?id=1" class="image full"><img src="{{$alcohol->img}}" alt=""></a>
							<header>
								<h2>{{$alcohol->name}}</h2>
							</header>
							<p class="price">¥{{$alcohol->price}}<span>(税込)</span></p>     				
						</section>
						
					</div>
					@endforeach
					</div>
					</div>
					</div>

    <!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <p> Copyright 2016 All Rights Reserved.</p>
        </div>
    </div>

</body>

</html>