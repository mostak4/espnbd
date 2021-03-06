<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admin ESPNBD | Registration </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="{{asset('admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{asset('admin')}}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{asset('admin')}}/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="register-page">
<div class="register-box">
    <div class="register-logo">
        <a href=""><b>Admin</b>ESPNBD</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ route('register') }}" method="post">
            {{csrf_field()}}
            <div class="form-group has-feedback">
                <input type="text"  class="form-control" name="name" value="{{ old('name') }}" placeholder="Full name" />
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" />
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password" placeholder="Password" />
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control"  name="password_confirmation" placeholder="Retype password" />
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div><!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div><!-- /.col -->
            </div>
        </form>



        <a href="{{url('/login')}}" class="text-center">I already have a membership</a>
    </div><!-- /.form-box -->
</div><!-- /.register-box -->

<!-- jQuery 2.1.4 -->
<script src="{{asset('admin')}}/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{asset('admin')}}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="{{asset('admin')}}/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
