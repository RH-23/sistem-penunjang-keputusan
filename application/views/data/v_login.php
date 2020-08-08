<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Form Login</title>

		<link href="<?=base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?=base_url();?>/assets/vendor/AdminLTE-2.4.3/css/AdminLTE.min.css" rel="stylesheet">
		<link href="<?=base_url();?>/assets/vendor/iCheck/square/blue.css" rel="stylesheet">
		<script src="<?=base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- jQuery 2.2.3 -->
	<script src="<?=base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
</head>

	</head>
		<!-- <body>
			<p>Silahkan <a href="<?php base_url();?>dashboard">Login</a></p> --> 

		<!-- Form Login -->
		<body class="hold-transition register-page">
				<div class="wrapper">
					<div class="login-box">
				<div class="login-logo">
					<b>AKUN</b></a>
				</div>
				<!-- /.login-logo -->
				<div class="login-box-body">
					<p class="login-box-msg text-bold"> Masukan User &amp; Password Anda</p>
					<form method="post" action="<?php echo base_url()?>login/validasi" role="login">
						<div class="form-group has-feedback">
							<!-- <input type="hidden" name="id_user" class="form-control"> -->
							<input type="user" name="username" class="form-control" required="" minlength="5" placeholder="User">
							<span class="glyphicon  glyphicon-user form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<input type="password" name="password" class="form-control" required="" minlength="5" placeholder="Password">
							<span class="glyphicon glyphicon-lock form-control-feedback"></span>
						</div>

						<div class="row">
							<div class="checkbox icheck col-xs-12 col-sm-6 col-md-6">
								<label>
									<div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" name="remember_code" value="1" id="remember_code" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
									Ingat Saya
								</label>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6" style="padding-bottom: 5px">
								<button type="submit" name="submit" value="login" class="btn btn-primary btn-block btn-flat"><i class="fa fa-sign-in" aria-hidden="true"></i> Masuk</button>
							</div>
						</div>
						<a href="#"> Lupa Kata Sandi?</a><br>
						<a href="<?php base_url();?>/data/register"> Daftar Akun</a>
					</form>
				</div>
				<div id="myalert" style="display: none;">
					<p class="box-msg">
						</p><div class="info-box alert-info">
						<div class="info-box-icon">
							<i class="fa fa-info-circle"></i>
						</div>
						<div class="info-box-content" style="font-size:14">
							<b style="font-size: 20px">GAGAL</b><br>Akun yang Anda masukkan tidak aktif, silakan hubungi Administrator.
						</div>
						</div>
					</div>
				<br>
			</div>
		</body>
		<!-- Akhir Form Login -->
</html>
