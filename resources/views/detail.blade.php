<!DOCTYPE HTML>
<html>

<head>
    <title>Alcohol</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
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
                   <li><a href="cart"><i class="fa fa-shopping-cart fa-3x fa-white"></i></a></li>
                </ul>
            </nav>

        </div>
    </div>

    

    <div id="main">
            <div class="container">
                    <div class="itemimage">
                       
                            <a href="#" class="itemimg"><img src="{{  $alcohol->img }}" alt=""></a>
                        

                        <p>{{$alcohol->name}}</p>
                        <p>{{ $alcohol->description}}</p>
                        <p>{{ $alcohol->price }} </p>         
                        
                        </div>

                        <form action="/cart?id={{$alcohol->id}}" method="post">
                {{ csrf_field() }}
                <ul class="actions fit">
                    <li><a href="/" class="button fit">一覧に戻る</a></li>
                    <li><input type="submit" class="button special fit" value="カートに入れる"></li>
                </ul>
            </form>

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