<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('Regislogin/css/material-dashboard.css')}}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('Regislogin/css/material-dashboard.css')}}"> --}}


</head>
@section('content')
<br><br><br><br><br>
<body>
  <div class="fullscreen-bg">
    <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        <source src="../Regislogin/img/KIDECO moment2.mp4" type="video/mp4">
    </video>
  </div>
  
    <div class="container" style="height: auto;">
        <div class="row align-items-center">
          <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="user" method="POST" action="/register">
              @csrf
      
              <div class="card card-login card-hidden mb-4">
                <div class="card-header card-header-info text-center">
                  <h4 class="card-title" ><strong>{{ __('REGISTER') }}</strong></h4>
                </div>
                <div class="card-body ">
                  <p class="card-description text-center">{{ __('PT. KIDECO JAYA AGUNG') }}</p>
                  <div class="bmd-form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                    <div class="form-group">
                      @if(Session::has('BerhasilRegister'))
                          <div class="alert alert-success">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong>Success,</strong>
                              {{ Session::get('BerhasilRegister') }}
                          </div>
                      @endif
                              <input type="text" class="form-control form-control @error('username') is-invalid @enderror" name="username" id="username"
                                placeholder="Username" required value="{{ old('username') }}">
                              @error('username')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                    </div>
                      <div class="form-group">
                        <!-- #Scrollable SelecBox -->
                        <!-- onfocus='this.size=4;' onblur='this.size=1;' onchange='this.size=1; this.blur();' -->
                         <select name="id_department"   class="form-control @error('id_department') is-invalid @enderror" id="id_department"
                              required>
                              <option value=""selected >Choose Department</option>
                              @foreach ($id_depart as $item)
                              <option value="{{ $item->id}}" {{ old ('id_department') == $item->id ? 'selected' : null }} >{{ $item->nama_department}}</option>
                              @endforeach
                         </select>
                         @error('id_department')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror 
                      </div>
                      <div class="form-group">
                              <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                  id="password" placeholder="Password" required>
                              @error('password')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                      </div>  
                    
                  </div>
                </div>
                <div class="card-footer justify-content-center">
                  <button type="submit" class="btn btn-danger btn-user btn-block">{{ __('Create account') }}</button>
                </div>
                <div class="text-center">
                  <a class="medium" href="/login">Already have an Account? Click here to Login</a>
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>

    {{-- <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="/register" method="post">
                            @csrf
                                <div class="form-group">
                                @if(Session::has('BerhasilRegister'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <strong>Success,</strong>
                                        {{ Session::get('BerhasilRegister') }}
                                    </div>
                                @endif
                                        <input type="text" class="form-control form-control @error('username') is-invalid @enderror" name="username" id="username"
                                          placeholder="Username" required value="{{ old('username') }}">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                <!-- #Scrollable SelecBox -->
                                <!-- onfocus='this.size=4;' onblur='this.size=1;' onchange='this.size=1; this.blur();' -->
                                   <select name="id_department"   class="form-control @error('id_department') is-invalid @enderror" id="id_department"
                                        required>
                                        <option value=""selected >Choose Department</option>
                                        @foreach ($id_depart as $item)
                                        <option value="{{ $item->id}}" {{ old ('id_department') == $item->id ? 'selected' : null }} >{{ $item->nama_department}}</option>
                                        @endforeach
                                   </select>
                                   @error('id_department')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror 
                                </div>
                                <div class="form-group">
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                                            id="password" placeholder="Password" required>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an Account? Click here to Login</a>
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