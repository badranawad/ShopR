<!DOCTYPE html>
<html lang="<?php echo app('translator')->getFromJson('home.lang'); ?>" dir="<?php echo app('translator')->getFromJson('home.dir'); ?>">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><?php echo e(get_option('SiteTitle')); ?> - لوحة التحكم</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<!--begin::Base Styles -->
		<link href="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    	<link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900" rel="stylesheet">
		<!--end::Base Styles -->

	    <link href="<?php echo e(url('/')); ?>/assets/admin/css.css" rel="stylesheet" type="text/css" />

	    <?php if( is_rtl() ): ?>
	    <link href="<?php echo e(url('/')); ?>/assets/admin/css-rtl.css" rel="stylesheet" type="text/css" />
	    <?php endif; ?>

    	<link rel="icon" href="<?php echo e(url('/')); ?>/favicon.ico">

	</head>
	<!-- end::Head -->
	<!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--singin m-login--2 m-login-2--skin-2" id="m_login" >
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="<?php echo e(url('/')); ?>/assets/images/4.png" style="width: 100px;">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
							</div>

					          <?php if( session('error') ): ?>
					          <div class="m-subheader ">
					              <div class="alert alert-danger">
					                  <p><?php echo e(session('error')); ?></p>
					              </div>
					          </div>
					          <?php endif; ?>

							<form class="m-login__form m-form" action="<?php echo e(route('admin.auth.doLogin')); ?>" method="post">
								
								<?php echo e(csrf_field()); ?>


								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="email" placeholder="البريد الإلكتروني" name="email" autocomplete="off">
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="كلمة المرور" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-right m-login__form-right">
										<label class="m-checkbox">
											<input type="checkbox" name="remember" value="1">
											تذكر بياناتي
											<span></span>
										</label>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-accent m-btn m-btn--pill m-btn--air m-login__btn m-login__btn--accent">
										تسجيل الدخول
									</button>
								</div>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
		<!--begin::Base Scripts -->
		<script src="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Snippets -->
		<script type="text/javascript">
		$(function(){
			$("form").submit(function(){
				$("#m_login_signin_submit").addClass('m-loader m-loader--right m-loader--light').attr('disabled', true);
			});
		});
		</script>
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
