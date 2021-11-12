<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Regislogin/css/material-dashboard.css')}}" rel="stylesheet">

</head>
@section('content')
<br><br><br><br><br><br><br><br><br><br>
<body>
    <div class="fullscreen-bg">
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
            <source src="../Regislogin/img/KIDECO moment2.mp4" type="video/mp4">
        </video>
    </div>
      <div class="container" style="height: auto;">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="user" method="POST" action="/login">
              @csrf
      
                <div class="card card-login card-hidden mb-4">
                    <div class="card-header card-header-info text-center">
                        <h4 class="card-title" ><strong>{{ __('LOGIN') }}</strong></h4>
                    </div>
                    <div class="card-body ">
                        <p class="card-description text-center">{{ __('PT. KIDECO JAYA AGUNG') }}</p>
                        <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="form-group">
                                @if(session()->has('LoginError'))
                                <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    {{ session('LoginError') }}
                                </div>
                                @endif
                                <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror"
                                    id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="password" placeholder="Password" required>
                            </div>
                            <div class="card-footer justify-content-center">
                                <button type="submit" class="btn btn-danger btn-user btn-block">{{ __('LOGIN') }}</button>
                            </div>
                            <div class="text-center">
                                <a class="medium" href="/register">Don't have an account yet?? Click here to Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
          </div>
        </div>
      </div>
    {{-- <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            
            <div class="col-xl-10 col-lg-12 col-md-8">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-5">Login</h1>
                                    </div>
                                    <form class="user" action="/login" method="post">
                                    @csrf 
                                        <div class="form-group">
                                            @if(session()->has('LoginError'))
                                            <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                   {{ session('LoginError') }}
                                            </div>
                                            @endif
                                            <input type="text" name="username" class="form-control form-control-user @error('username') is-invalid @enderror"
                                                id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                                                @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <div class="text-center mt-3">
                                        <a class="small" href="/register">Register</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script> --}}

</body>

</html>