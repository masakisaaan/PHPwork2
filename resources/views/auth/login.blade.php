@extends('layouts.auth')

@section('title', 'Login')

@section('css')
<!-- none -->
@endsection

@section('js')
    <script src="/js/jquery.flexslider-min.js" charset="utf-8"></script>
@endsection

@section('main')
<div class="container-fruid">
    
    <div class="omb_login login_margin">
    	<h1 class="omb_authTitle">ログイン</h1>
        <h2 class="omb_authsocialTitle">ソーシャルアカウントでログイン</h2>

		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>	
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">または</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
			    <form class="omb_loginForm" action="{{ url('/login') }}" autocomplete="off" method="POST">
                {{ csrf_field() }}

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}"> 
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
                         
					</div>
					  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                
				   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom:-7px;">				
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						<input  type="password" class="form-control" name="password" placeholder="パスワード">
					</div>
                    @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>

				<p class="omb_forgotPwd" style="margin-bottom:30px;">
					<a href="{{ url('/password/reset') }}" style="font-size:14px;">パスワードを忘れた</a>
				</p>
					<button class="btn btn-lg btn-primary btn-block loginbutton center-block" type="submit">ログイン</button>
				</form>
			</div>
    	</div>	    	
	  </div>
    </div>
@endsection

