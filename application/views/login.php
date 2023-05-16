<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>用户登录</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="all,follow">
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/font-awesome/css/font-awesome.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('/public/css/fontastic.css'); ?>">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
		<link rel="stylesheet" href="<?php echo base_url('/public/css/style.default.css'); ?>" id="theme-stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('/public/css/custom.css'); ?>">
		<link rel="shortcut icon" href="<?php echo base_url('/public/images/favicon.ico'); ?>">
	</head>
	<body>
		<div class="page login-page">
			<div class="container d-flex align-items-center">
				<div class="form-holder has-shadow">
					<div class="row">
						<div class="col-lg-6">
							<div class="info d-flex align-items-center">
								<div class="content">
									<div class="logo">
										<h1>新农科建设绩效评价系统</h1>
									</div>
									<div>
										<h2 style="font-size:smaller">performance evaluation system for the emerging
											agricultural education development</h2>
									</div>
								</div>
							</div>
						</div>
						<!-- Form Panel    -->
						<div class="col-lg-6 bg-white">
							<div class="form d-flex align-items-center">
								<div class="content">
									<form method="post" action="<?php echo site_url('/login'); ?>" class="form-validate">
										<div class="form-group">
											<input id="login-username" type="text" name="name" required
												   data-msg="Please enter your username" class="input-material">
											<label for="login-username" class="label-material">用户名</label>
										</div>
										<div class="form-group">
											<input id="login-password" type="password" name="pwd" required
												   data-msg="Please enter your password" class="input-material">
											<label for="login-password" class="label-material">密码</label>
										</div>
										<div class="form-group">
											<button id="login" type="submit" class="btn btn-primary col-4 offset-5">&nbsp;登&nbsp;&emsp;&nbsp;录&nbsp;</button>
										</div>
									</form>
									<a href="<?php echo site_url('/reset') ?>" class="forgot-pass">忘记密码？</a>
									<br>
									<small>没有帐户？</small>
									<a href="<?php echo site_url('/reg') ?>" class="signup">注册</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyrights text-center">
				<p><a target="_blank" href="">Design by Bootstrapious</a></p>
			</div>
		</div>
		<!-- JavaScript files-->
		<script src="<?php echo base_url('/public/vendor/jquery/jquery.min.js'); ?>"></script>
		<script src="<?php echo base_url('/public/vendor/popper.js/umd/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('/public/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
		<script src="<?php echo base_url('/public/vendor/jquery.cookie/jquery.cookie.js'); ?>"></script>
		<script src="<?php echo base_url('/public/vendor/chart.js/Chart.min.js'); ?>"></script>
		<script src="<?php echo base_url('/public/vendor/jquery-validation/jquery.validate.min.js'); ?>"></script>
		<!-- Main File-->
		<script src="<?php echo base_url('/public/js/front.js'); ?>"></script>
	</body>
</html>
