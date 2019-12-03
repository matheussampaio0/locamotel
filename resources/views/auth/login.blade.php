<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Login Page 2 | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="NiceAdmin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="NiceAdmin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="NiceAdmin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="NiceAdmin/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="NiceAdmin/css/style.css" rel="stylesheet">
  <link href="NiceAdmin/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img5-body"
style="background-image: url('https://uploads.metropoles.com/wp-content/uploads/2019/11/28092341/GettyImages-157334908-960x576.jpg');
background-attachment: fixed;
background-size: cover;">

  <div class="container">

    <form class="login-form" method="POST" action="{{ route('login') }}">
       {{ csrf_field() }}
      <div class="login-wrap{{ $errors->has('email') ? ' has-error' : '' }}">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input id="email" type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" autofocus required>
          @if ($errors->has('email'))
            <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
        </div>
        <div class="input-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input id="password" type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
      </div>
    </form>
  </div>


</body>

</html>
