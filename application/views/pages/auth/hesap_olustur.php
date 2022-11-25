<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="pixelstrap">
	<link rel="icon" href="<?php echo base_url('public'); ?>/assets/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo base_url('public'); ?>/assets/images/favicon.png" type="image/x-icon">
	<title> <?php echo $title; ?> </title>
	<!-- Google font-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
	<!-- Font Awesome-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/fontawesome.css">
	<!-- ico-font-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/icofont.css">
	<!-- Themify icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/themify.css">
	<!-- Flag icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/flag-icon.css">
	<!-- Feather icon-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/feather-icon.css">
	<!-- Plugins css start-->
	<!-- Plugins css Ends-->
	<!-- Bootstrap css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/bootstrap.css">
	<!-- App css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/style.css">
	<link id="color" rel="stylesheet" href="<?php echo base_url('public'); ?>/assets/css/color-1.css" media="screen">
	<!-- Responsive css-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('public'); ?>/assets/css/crm.css">
</head>
<body>
<!-- Loader starts-->
<div class="loader-wrapper">
	<div class="theme-loader">
		<div class="loader-p"></div>
	</div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<section>
	<div class="container-fluid p-0">
		<div class="row">
			<div class="col-12">
				<div class="login-card">
					<form class="theme-form login-form" method="post" name="create_account" id="create_account">
						<nav class="navbar navbar-expand-sm">
						</nav>
						<h4>Hesap Oluştur</h4>
						<h6>Formu Eksiksiz Doldurunuz! </h6>
						<div class="form-group text-center">
							<div class="form-group m-t-15 m-checkbox-inline mb-0 custom-radio-ml">
								<div class="radio radio-primary">
									<input id="radioinline1" type="radio" name="hesap_turu" value="2">
									<label class="mb-0" for="radioinline1">Tedarikçi</label>
								</div>
								<div class="radio radio-primary">
									<input id="radioinline2" type="radio" name="hesap_turu" value="3">
									<label class="mb-0" for="radioinline2">Acente</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label>İsim</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-user"></i></span>
								<input class="form-control" type="text" name="isim" placeholder="İsim" autocomplete="off" required>
							</div>
						</div>
						<div class="form-group">
							<label>Kullanıcıadı</label>
							<div class="input-group"><span class="input-group-text" id="inputGroupPrepend">@</span>
								<input class="form-control" type="text" name="kullaniciadi" placeholder="Kullanıcıadınız" autocomplete="off" required>
							</div>
						</div>
						<div class="form-group">
							<label>E-posta</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-email"></i></span>
								<input class="form-control" type="email" name="eposta" placeholder="E-posta Adresiniz" autocomplete="off" required>
							</div>
						</div>
						<div class="form-group">
							<label>Şifre</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
								<input class="form-control" type="password" name="sifre" placeholder="Şifreniz" required>
							</div>
						</div>
						<div class="form-group">
							<label>Şifre Tekrar</label>
							<div class="input-group"><span class="input-group-text"><i class="icon-lock"></i></span>
								<input class="form-control" type="password" name="sifre_tekrar" placeholder="Şifreniz Tekrar" required>
							</div>
						</div>
						<div class="form-group align-middle">
							<button class="btn btn-primary btn-sm" type="button" name="create_account">Hesap Oluştur</button>
						</div>
						<p>Hesabın var mı? <a class="" href="<?php echo base_url(); ?>">Giriş Yap</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- page-wrapper end-->
<!-- latest jquery-->
<script src="<?php echo base_url('public'); ?>/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="<?php echo base_url('public'); ?>/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo base_url('public'); ?>/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="<?php echo base_url('public'); ?>/assets/js/sidebar-menu.js"></script>
<script src="<?php echo base_url('public'); ?>/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo base_url('public'); ?>/assets/js/bootstrap/popper.min.js"></script>
<script src="<?php echo base_url('public'); ?>/assets/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo base_url('public'); ?>/assets/js/script.js"></script>
<script src="<?php echo base_url('public'); ?>/assets/js/login-ajax.js"></script>
<!-- login js-->
<!-- Plugin used-->
<script src="<?php echo base_url('public'); ?>/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="<?php echo base_url('public'); ?>/assets/js/notify/notify-script.js"></script>
</body>
</html>
