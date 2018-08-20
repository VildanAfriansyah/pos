<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" href="<?=base_URL()?>uploads/pengaturan/favicon/favicon1.png" type="image/x-icon" />
  <title>POS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/login/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/login/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_URL()?>assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <div class="login-logo">
      <h2 class="text-uppercase text-center">
        <a href="<?=base_URL()?>auth/masuk" class="text-success">
        </a>
      </h2>
      <h5 class="text-uppercase font-bold m-b-5 m-t-50">Masuk ke akun kamu sekarang !</h5>
    </div>

<?php
echo form_open('auth/login');
?>


<div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" maxlength="20" placeholder="username" required autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback text-yellow"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" maxlength="50" placeholder="Password" required autofocus>
        <span class="glyphicon glyphicon-lock form-control-feedback text-red"></span>
      </div>
      <hr>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox">&nbsp;&nbsp; Ingat Aku ?
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Masuk &nbsp;<i class="fa fa-sign-in"></i></button>
        </div>
        <!-- /.col -->
      </div>

    <?=form_close()?>

  </div>
  <!-- /.login-box-body -->

  <hr>
  <!-- footer -->
  <div class="text-center">
    Hak Cipta &copy; 2018 &nbsp; <a href="<?=base_URL()?>"></a>
  </div>
  <!-- /.footer -->
  <hr>


</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?=base_URL()?>assets/plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_URL()?>assets/login/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?=base_URL()?>assets/plugins/iCheck/icheck.min.js"></script>
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