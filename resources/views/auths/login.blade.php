<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
<title>sign in</title>
</head>
<body>
<div id="Web_1280__1">
	<div id="text">
		<svg class="Rectangle_163">
			<rect id="Rectangle_163" rx="0" ry="0" x="0" y="0" width="586" height="800">
			</rect>
		</svg>
		<div id="Logo">
			<span>AUDIT MANAGEMENT</span>
		</div>
		<div id="Welcome_back_Please_login_to_y">
			<span>Welcome back! Please login to your account.</span>
		</div>
        <div class="login-content">
			<form class="user" method="post" action="/login">
                @csrf
                <div class="{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="input-div one">
                        @if(session()->has('LoginError'))
                        <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            {{ session('LoginError') }}
                        </div>
                        @endif
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input @error('username') is-invalid @enderror" id="username">
                            @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                    </div>
                    </div>
                    <div class="input-div pass">
                    <div class="i"> 
                            <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                            <h5>Password</h5>
                            <input type="password" class="input" id="password">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-margin">LOGIN</button>
                    <button type="submit" class="btn">{{('REGISTER')}}</button>
                </div>
            </form>
        </div>
		
	</div>
	<img id="k1_b" src="{{asset('assets/img/k1_b.png')}}">
		
	<div id="Group_247">
		<img id="Group_4" src="{{asset('assets/img/Group_4.png')}}">
		
	</div>
	<img id="k1_b" src="{{asset('assets/img/k1_b.png')}}">
		
</div>

<script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>