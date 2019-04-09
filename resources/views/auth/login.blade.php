<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antrian Apps</title>

    <!-- Bootstrap -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{url('css/font-awesome/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{url('css/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{url('animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{url('css/custom.min.css')}}" rel="stylesheet">
  </head>

  <body class="login">
    <div class="row">


      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

            <form method="POST" action="{{ route('login') }}">
              <h1>Login Akun</h1>
                @csrf

                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3">

                  </div>
                  <div class="col-md-6">
                          <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                          <label class="form-check-label" for="remember">
                              {{ __('Remember Me') }}
                          </label>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-3">

                  </div>
                    <div class="col-md-3">
                        <button style="margin-left:26px;" type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>


                    </div>
                    <!--
                    <div class="col-lg-3">
                      @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif
                    </div>
                  -->

                </div>

            </form>

          </section>

          <div class="divider">

          </div>

          <div class="row">
            <div class="col-md-12">
              <center><h4>Dika Hastanto</h4>
                <p>Sistem Informasi Fakultas Ilmu Komputer Universitas Bandar Lampung 2019</p>
              </center>

            </div>
          </div>
        </div>


      </div>

    </div>




  </body>
</html>
