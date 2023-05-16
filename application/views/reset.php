<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>密码重置</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="robots" content="all,follow">
		<!-- Bootstrap CSS-->
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/bootstrap/css/bootstrap.min.css'); ?>">
		<!-- Font Awesome CSS-->
		<link rel="stylesheet" href="<?php echo base_url('/public/vendor/font-awesome/css/font-awesome.min.css'); ?>">
		<!-- Fontastic Custom icon font-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/fontastic.css'); ?>">
		<!-- Google fonts - Poppins -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
		<!-- theme stylesheet-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/style.default.css'); ?>" id="theme-stylesheet">
		<!-- Custom stylesheet - for your changes-->
		<link rel="stylesheet" href="<?php echo base_url('/public/css/custom.css'); ?>">
		<!-- Favicon-->
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
										<div>
											<h2 style="font-size:smaller">performance evaluation system for the emerging
												agricultural education development</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 bg-white">
							<div class="form d-flex align-items-center">
								<div class="content">
									<form class="form-validate" method="post" action="<?php echo site_url('/reset'); ?>" >
										<div class="form-group">
											<input id="reset-username" type="text" name="name" required
												   data-msg="请输入你的用户名" class="input-material">
											<label for="reset-username" class="label-material">用户名</label>
										</div>
										<div class="form-group">
											<input id="reset-email" type="email" name="email" required
												   data-msg="Please enter a valid email address" class="input-material">
											<label for="reset-email" class="label-material">邮箱地址</label>
										</div>
										<div class="form-group">
											<input id="reset-password" type="password"
												   name="pwd" required
												   data-msg="Please enter your password" class="input-material">
											<label for="reset-password"
												   class="label-material">密码</label>
										</div>
										<div class="form-group">
											<input id="confirm-reset-password" type="password"
												   name="confirm_pwd" required
												   data-msg="Please enter your password" class="input-material">
											<label for="confirm-reset-password"
												   class="label-material">确认密码</label>
										</div>
										<div class="form-group">
											<button id="reset" type="submit"
													class="btn btn-primary col-4 offset-5">&nbsp;找&nbsp;回&nbsp;密&nbsp;码&nbsp;
											</button>
										</div>
									</form>
									<small>已有用户？</small>
									<a href="<?php echo site_url('/login'); ?>" class="signup">登录</a>
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
