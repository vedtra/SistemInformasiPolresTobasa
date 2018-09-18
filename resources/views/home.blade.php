<!DOCTYPE html>
  
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/polres.png">
    <title>Login | SIMPT</title>


    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('ulogin/bootstrap.min.css')}}" />
    
    <!--<link rel="stylesheet" type="text/css" href="font-awesome.min.css" />-->
    <link rel="stylesheet" type="text/css" href="{{asset('ulogin/font-awesome.min.css')}}">
    <!-- text fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('ulogin/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('ulogin/ace.min.css')}}" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{asset('ulogin/ace-rtl.min.css')}}" />

    <!--[if lte IE 9]>
      <link rel="stylesheet" href="ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="html5shiv.min.js"></script>
    <script src="respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="login-layout">
    <div class="main-container">
      <div class="main-content">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="login-container">
              <div class="center">
                <h2 style="margin-top: 1px;">
                <img src="{{asset('ulogin/logo2.png')}}" alt="" width="300px">
                  <span class="red">Sistem Informasi<br>Polres Tobasa</span>
                </h2>
                
              </div>

              <div class="space-6"></div>

              
                <div id="login-box" class="login-box visible widget-box no-border">
                  <div class="widget-body">
                    <div class="widget-main">
                      <h4 class="header blue lighter bigger">
                      </h4>
                  <div class="space-6"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button><br><br>
                                <a href="pemohon/index" class="btn btn-primary">Login sebagai Masyarakat</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>