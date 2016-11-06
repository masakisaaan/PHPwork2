@extends('layouts.master')

@section('title', 'Home')

@section('css')
    <link href="/css/index/index.css" rel="stylesheet">
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection

@section('main')
	<div id="marketing">
        <div class="title">
        <h1>Whisky</h1>
        </div>
			<div class="container">
				<div class="row">
				//foreach($alcohol as $alcohol)
					<div class="3u">
					
						<section>
							<!--<a href="/detail?id=1" class="image full"><img src="" alt=""></a>-->
							<header>
								<h2></h2>
							</header>
							<p class="price">¥<span>(税込)</span></p>     				
						</section>
						
					</div>
				//endforeach
					</div>
					</div>
					</div>
@endsection