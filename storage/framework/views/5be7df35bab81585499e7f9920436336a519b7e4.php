<!DOCTYPE html>
<html lang="ar">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta charset="utf-8">
	<title>متجري</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/bootstrap.min.css" type="text/css">

	@dir('rtl')
	    <link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/bootstrap-rtl.min.css" type="text/css">
	@enddir

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/bootstrap-select.min.css" type="text/css">


	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/fontawesome-all.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/material-design-iconic-font.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/fonts/line-icons/line-icons.css" type="text/css">
	<link href="<?php echo e(url('/assets')); ?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/main.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/settings.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/animate.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/owl.theme.default.min.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/ion.rangeSlider.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/ion.rangeSlider.skinFlat.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/component.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/slick.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/slick-theme.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/extras/nivo-lightbox.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo e(url('/assets')); ?>/assets/css/bootstrap-datetimepicker.css">


	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/slicknav.css" type="text/css">

	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/responsive.css" type="text/css">
	<link rel="stylesheet" href="<?php echo e(url('/assets')); ?>/assets/css/custome_style.css" type="text/css">

	<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/jquery-min.js"></script>

</head>

<body>

	<div class="header">

		<div class="top-bar">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-4">
						<div class="language-wrapper">

						</div>
						<div class="clear"></div>
					</div>
					<div class="col-md-7 col-sm-8">

						<div class="search-area">

							<form action="<?php echo e(route('site.search')); ?>">
								<div class="control-group">

									<div class="categories-filter animate-dropdown">
										<select class="form-control chosen-select" name="category">

                                            <option value="">@siteLang('all_categories')</option>

                                            <?php $__currentLoopData = $firstLevelCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                <option value="<?php echo e($category['id']); ?>"><?php echo e($category['name']); ?></option>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			                        	</select>
									</div>

									<input class="search-field" name="s" placeholder="@siteLang('search_for_product')">
									<button class="search-button" type="submit"><i class="icon-magnifier"></i></button>
								</div>
							</form>
						</div>
						<div class="shop-cart">
							<ul>

                                <?php if(auth()->check()): ?>
                                    <li>
                                        <a class="cart-icon cart-btn" href="<?php echo e(route('site.profile.favorites')); ?>"><span class="icon-heart"></span></a>
                                    </li>
                                <?php endif; ?>

								<li>
                                    <?php $minicart = app('App\Http\Controllers\site\CartController'); ?>
                                    <?php $totalCartItems = totalCartItems(); ?>
                                    <a href="<?php echo e(route('site.cart.cart')); ?>" class="cart-icon cart-btn"><i class="icon-basket-loaded"></i>
										<span class="cart-label <?php echo e($totalCartItems > 0 ? 'show' : 'hidden'); ?>" id="miniCartTotalViews"><?php echo e($totalCartItems); ?></span></a>
									<div class="cart-box mini-cart-area">
											<?php echo $minicart->miniCart(); ?>

									</div>
								</li>

							</ul>
						</div>
						<div class="shop-cart">
							<ul>
								<li>
									<?php if(!auth()->check()): ?>

                                    <div class="account link-inline account_nnn">
                                        <div class="dropdown text-right">
                                            <a class="account_nnn_link" href="<?php echo e(route('site.login')); ?>">
                                                <i class="fas fa-user"></i>
                                            </a>
                                        </div>
                                    </div>


	                                <?php else: ?>

                                    <div class="account link-inline account_nnn">
                                        <div class="dropdown text-right">
                                            <a href="#" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon-user"></span> <span class="icon-arrow-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo e(route('site.profile.index')); ?>"><span class="icon icon-user"></span>@siteLang('profile')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.points')); ?>"><span class="icon icon-star"></span>@siteLang('my_points')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.orders')); ?>"><span class="icon icon-handbag"></span>@siteLang('my_orders')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.address')); ?>"><span class="icon icon-map"></span>@siteLang('my_addresses')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.favorites')); ?>"><span class="icon icon-heart"></span>@siteLang('favorite')</a></li>
                                                <li><a href="<?php echo e(route('site.logout')); ?>"><span class="icon icon-logout"></span>@siteLang('logout')</a></li>
                                            </ul>
                                        </div>
                                    </div>

	                                <?php endif; ?>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>


		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
			<div class="container">
				<div class="row">
					<div class="navbar-header">

						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>

						<a href="<?php echo e(route('site.home')); ?>" class="navbar-brand">

							<img style="width: 120px;" src="<?php echo url_ts('assets/logo.svg'); ?>" alt="" class="img-responsive">

						</a>
					</div>
					<div class="navbar-collapse collapse">

						<?php echo displayMenu('header',['container_class' => 'nav navbar-nav','arrows' => true,'levels' => true]); ?>


						<div class="icon-right pull-right">
							<div class="text-right">

                               <!--  <?php if(!auth()->check()): ?>

                                    <div class="account link-inline">
                                        <div class="dropdown text-right">
                                            <a href="<?php echo e(route('site.login')); ?>">
                                                <span class="icon-user"></span><span> @siteLang('_login') / @siteLang('register')</span>
                                            </a>
                                        </div>
                                    </div>


                                <?php else: ?>

                                    <div class="account link-inline">
                                        <div class="dropdown text-right">
                                            <a href="#" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="icon-user"></span> <span class="icon-arrow-down"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="<?php echo e(route('site.profile.index')); ?>"><span class="icon icon-user"></span>@siteLang('profile')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.points')); ?>"><span class="icon icon-star"></span>@siteLang('my_points')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.orders')); ?>"><span class="icon icon-handbag"></span>@siteLang('my_orders')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.address')); ?>"><span class="icon icon-map"></span>@siteLang('my_addresses')</a></li>
                                                <li><a href="<?php echo e(route('site.profile.favorites')); ?>"><span class="icon icon-heart"></span>@siteLang('favorite')</a></li>
                                                <li><a href="<?php echo e(route('site.logout')); ?>"><span class="icon icon-logout"></span>@siteLang('logout')</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                <?php endif; ?> -->

							</div>
						</div>
					</div>
				</div>
			</div>


			<ul class="mobile-menu">
				<li>
					<a class="active" href="index-2.html">
					Home
					</a>
					<ul class="dropdown">
						<li>
							<a class="active" href="index-2.html">Home V1</a>
						</li>
						<li>
							<a href="index-3.html">Home V2</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="#">Catalog</a>
					<ul class="dropdown menulinks">
						<li class="maga-menu-title">
							<a href="#">Men</a>
						</li>
						<li><a href="category.html">Clothing</a></li>
						<li><a href="category.html">Handbags</a></li>
						<li><a href="category.html">Maternity</a></li>
						<li><a href="category.html">Jewelry</a></li>
						<li><a href="category.html">Scarves</a></li>
						<li class="maga-menu-title">
							<a href="#">Women</a>
						</li>
						<li><a href="category.html">Handbags</a></li>
						<li><a href="category.html">Jewelry</a></li>
						<li><a href="category.html">Clothing</a></li>
						<li><a href="category.html">Watches</a></li>
						<li><a href="category.html">Hats</a></li>
						<li class="maga-menu-title">
							<a href="#">Accessories</a>
						</li>
						<li><a href="category.html">Belts</a></li>
						<li><a href="category.html">Scarves</a></li>
						<li><a href="category.html">Hats</a></li>
						<li><a href="category.html">Ties</a></li>
						<li><a href="category.html">Handbags</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Shop</a>
					<ul class="menulinks">
					<li class="maga-menu-title">
					<a href="#">Shop Types</a>
					</li>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="shop-grid.html">Shop Grid Sidebar</a></li>
					<li><a href="shop-list.html">Shop List Sidebar</a></li>
					<li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
					<li><a href="product-details.html">Product Details</a></li>
					<li class="maga-menu-title">
					<a href="#">Shop Pages</a>
					</li>
					<li><a href="shopping-cart.html">Cart Page</a></li>
					<li><a href="checkout.html">Checkout Page</a></li>
					<li><a href="wishlist.html">Wishlist</a></li>
					<li><a href="order.html">Your Order</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="login-form.html">My Account</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Pages</a>
					<ul class="dropdown">
						<li>
						<a href="about.html">About Us</a>
						</li>
						<li>
						<a href="services.html">Services</a>
						</li>
						<li>
						<a href="contact.html">Contact Us</a>
						</li>
						<li>
						<a href="product-details.html">Product Details</a>
						</li>
						<li>
						<a href="team.html">Team Member</a>
						</li>
						<li>
						<a href="checkout.html">Checkout</a>
						</li>
						<li>
						<a href="shopping-cart.html">Shopping cart</a>
						</li>
						<li>
						<a href="faq.html">FAQs</a>
						</li>
						<li>
						<a href="wishlist.html">Wishlist</a>
						 </li>
						<li>
						<a href="404.html">404 Error</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">Blog</a>
					<ul class="dropdown">
						<li>
							<a href="blog.html">Blog Right Sidebar</a>
						</li>
						<li>
							<a href="blog-left-sidebar.html">Blog Left Sidebar</a>
						</li>
						<li>
							<a href="blog-full-width.html">Blog Full Width</a>
						</li>
						<li>
							<a href="blog-details.html">Blog Details</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li><a href="#">Account</a>
				<ul class="dropdown">
					<li><a href="login-form.html">My Account</a></li>
					<li><a href="wishlist.html">My Wishlist</a></li>
					<li><a href="compare.html">Compare</a></li>
					<li><a href="checkout.html">Checkout</a></li>
					<li><a href="login.html">Log In</a></li>
					<li><a href="register.html">Create an account</a></li>
					<li><a href="#">close</a></li>
				</ul>
				</li>
			</ul>

		</nav>
	</div>


		<?php echo $__env->yieldContent('content'); ?>



		<footer class="section">
			<div class="container">
				<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="contact-us">
						<h3 class="widget-title">@siteLang('contact_us')</h3>
						<ul class="contact-list">



						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<h3 class="widget-title">@siteLang('useful_links')</h3>
                    <?php echo displayMenu('footer',['container_class' => '','arrows' => false,'levels' => false]); ?>

				</div>
				<div class="col-md-3 col-sm-6">
					<h3 class="widget-title">@siteLang('categories')</h3>
					<div class="tagcloud">
                        <?php $__currentLoopData = $firstLevelCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						    <a href="<?php echo e($cat['url']); ?>" class="tag-link"><?php echo e($cat['name']); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="block-subscribe">
						<h3 class="widget-title">@siteLang('contact_us_form')</h3>
                        <form class="subscribe contactUsForm" method="post" action="<?php echo e(route('site.contacts.send')); ?>">

                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">

                                <input type="text" class="form-control" name="name" placeholder="@siteLang('name')">

                            </div>

                            <div class="form-group">

                                <input type="email" class="form-control" name="email" placeholder="@siteLang('email')">

                            </div>

                            <div class="form-group">

                                <textarea class="form-control" name="message" placeholder="@siteLang('contact_us_msg')"></textarea>

                            </div>

                            <button type="submit" class="btn btn-common btn-full">@siteLang('send')</button>

                        </form>

                        <br />



                        <div class="contactUsForm-loading"></div>

					</div>
				</div>
				</div>
			</div>
		</footer>
		<div id="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
					 	<p>@siteLang('copyright')</p>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="payment pull-right">
							<img src="<?php echo e(url('/assets')); ?>/assets/img/payment.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>

		<a href="#" class="back-to-top">
		<i class="icon-arrow-up"></i>
		</a>



		<?php if( !auth()->user() ): ?>

		<!-- Modal -->

		<div class="modal fade modal-st" id="Modal-login" role="dialog">

		    <div class="modal-dialog">

		      <!-- Modal content-->

		      <div class="modal-content">

		        <div class="modal-body">

		          	<h2 class="modal-title">@siteLang('login')</h2>

		          	<form class="form-st2" action="<?php echo e(route('site.login.submit')); ?>" method="post" id="do-login">

		          		<?php echo e(csrf_field()); ?>


						<div class="form-group">

							<input type="text" class="form-control" name="email" placeholder="@siteLang('username')">

							<!-- <span class="input-icon user-svg"></span> -->

						</div>

						<div class="form-group">

							<input type="password" class="form-control" name="password" placeholder="@siteLang('password')">

							<!-- <span class="input-icon lock-ci-svg"></span> -->

						</div>

						<div class="form-group">

							<div class="ui_checkbox ui_checkbox-st2">

		                        <input type="checkbox" value="1" name="remmember">

		                        <label>@siteLang('remember_password')</label>

		                    </div>

						</div>

						<div class="form-group">
							<div class="ui_checkbox-st2">
		                        <label><a class="forgot-password" href="<?php echo e(route('password.request')); ?>">@siteLang('reset_password')</a></label>
		                    </div>
						</div>

						<div class="modal-form-action">

							<div class="row">

								<div class="col-xs-6">

									<button type="submit" class="btn btn-common  btn-submit-st2 submitLogin btn-block">@siteLang('login')</button>

								</div>

								<div class="col-xs-6">

									<button type="button" class="register-gg btn btn-common  btn-submit-st2 bg-s2 btn-block">@siteLang('create_account')</button>

								</div>

							</div>

						</div>

					</form>



					<div class="error-messages"></div>

		        </div>

		      </div>



		    </div>

		</div>

		<!-- Modal -->

		<div class="modal fade modal-st" id="Modal-register" role="dialog">

		    <div class="modal-dialog">

		      <!-- Modal content-->

		      <div class="modal-content">

		        <div class="modal-body">

		          	<h2 class="modal-title">@siteLang('create_account')</h2>

		          	<form class="form-st2" action="<?php echo e(route('site.register.submit')); ?>" method="post" id="do-register">

		          		<?php echo e(csrf_field()); ?>


						<div class="form-group">

							<input type="text" class="form-control" name="name" placeholder="@siteLang('name')">

							<!-- <span class="input-icon user-svg"></span> -->

						</div>

						<div class="form-group">

							<input type="email" class="form-control" name="email" placeholder="@siteLang('email')">

							<!-- <span class="input-icon email-svg"></span> -->

						</div>

						<div class="form-group">
							<div class="row" style="margin: 0 -3px;">
								<div class="col-xs-8" style="padding: 0 3px;">
									<input type="text" class="form-control" name="mobile" placeholder="@siteLang('mobile')">
								</div>
								<div class="col-xs-4" style="padding: 0 3px;">
									<select class="form-control" name="ext">

										<?php $__currentLoopData = countriesList(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

										<option value="<?php echo e($country->code); ?>"><?php echo e($country->code); ?></option>

										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

									</select>
								</div>
							</div>
							<!-- <span class="input-icon mobile-svg"></span> -->

						</div>


						<div class="form-group">

							<div class="new-roww row" style="margin: 0 -3px;">
								<div class="col-xs-4" style="padding: 0 3px;">
								<select name="day" class="selectos form-control">
									<option value="">@siteLang('day')</option>
									<?php for( $i=1;$i<=31;$i++): ?>
									<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
									<?php endfor; ?>
								</select>
								</div>
								<div class="col-xs-4" style="padding: 0 3px;">
								<select name="month" class="selectos form-control">
									<option value="">@siteLang('month')</option>
									<?php for( $i=1;$i<=12;$i++): ?>
									<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
									<?php endfor; ?>
								</select>
								</div>
								<div class="col-xs-4" style="padding: 0 3px;">
								<select name="year" class="selectos form-control">
									<option value="">@siteLang('year')</option>
									<?php for( $i=date('Y');$i>=1920;$i--): ?>
									<option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
									<?php endfor; ?>
								</select>
								</div>
							</div>

							<!-- <span class="input-icon birthdate-svg"></span> -->

						</div>

						<div class="form-group">
							<select class="form-control" name="gender" style="background-color: #fff;">
								<option value="">@siteLang('select_gender')</option>
								<option value="male">@siteLang('male')</option>
								<option value="female">@siteLang('female')</option>
							</select>
							<!-- <span class="input-icon gender-svg"></span> -->
						</div>


						<div class="form-group">

							<input type="password" name="password" class="form-control" placeholder="@siteLang('password')">

							<!-- <span class="input-icon lock-ci-svg"></span> -->

						</div>

						<div class="form-group">

							<input type="password" name="password_confirmation" class="form-control" placeholder="@siteLang('password_confirmation')">

							<!-- <span class="input-icon lock-ci-svg"></span> -->

						</div>

						<div class="modal-form-action">

							<button type="submit" class="btn btn-common btn-block btn-submit-st2 submitRegister">@siteLang('create_account')</button>

						</div>

					</form>



					<div class="error-messages"></div>



		        </div>

		      </div>



		    </div>

		</div>

		<?php endif; ?>



		<!-- Modal -->

		<div class="modal fade modal-addded-to-cart" id="addded-to-cart" role="dialog">

		    <div class="modal-dialog">

		      <div class="modal-content">

		        <div class="modal-body text-center">

		        	<img src="">

		        	<h2 class="pro__titlemo">@siteLang('added_successfully') <span> </span> @siteLang('to_cart')</h2>

		        	<div class="modal-formd-action row">

		        		<div class="col-xs-6">

			        		<a href="<?php echo e(route('site.cart.cart')); ?>" class="btn btn-common btn-block  btn-submit-st2">@siteLang('view_cart')</a>

		        		</div>

		        		<div class="col-xs-6">

			        		<a href="#" data-dismiss="modal" class="btn btn-common btn-block btn-submit-st2 bg-s2">@siteLang('continue_shopping')</a>

		        		</div>

		        	</div>

		        </div>

		      </div>

		    </div>

		</div>

		<!-- Modal -->

		<div class="modal fade modal-addded-to-compare" id="addded-to-compare" role="dialog">

		    <div class="modal-dialog">

		      <div class="modal-content">

		        <div class="modal-body text-center">

		        	<img src="">

		        	<h2>@siteLang('added_successfully') <span> </span> @siteLang('to_compare')</h2>

		        	<div class="modal-formd-action row">

		        		<div class="col-xs-6 margin-auto">

			        		<a href="<?php echo e(route('site.product.compare')); ?>" class="btn btn-submit-st2">@siteLang('view_compare')</a>

		        		</div>

		        	</div>

		        </div>

		      </div>

		    </div>

		</div>

        <div class="md-modal md-effect-3" id="quick-view">
        	<div class="md-content">
                <div class="product-info row"></div>
                <button class="md-close"><i class="icon-close"></i></button>
	        </div>
        </div>

        <div class="md-overlay"></div>


<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/ion.rangeSlider.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/modalEffects.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/classie.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/nivo-lightbox.js"></script>

<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/contact-form-script.js"></script>
<script src="<?php echo e(url('/assets')); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo e(url('/assets')); ?>/assets/js/moment.js"></script>
<script src="<?php echo e(url('/assets')); ?>/assets/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo e(url('/assets')); ?>/assets/js/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo e(url('/assets')); ?>/assets/js/custome-js.js"></script>
	<script type="text/javascript">
	    (function($){
	        $(window).on("load",function(){
	            $(".content").mCustomScrollbar();
	        });
	    })(jQuery);

	</script>
	<script type="text/javascript">
		if ($('.countdown').length) {
	        $('.countdown').countdown({
	            render: function(data) {
	                if (data.years >= 1) {
	                    var $days = (data.years*365)+data.days;
	                } else {
	                    var $days = data.days;
	                }
	              $(this.el).html(
	                  '<div class="day"><p>' + this.leadingZeros($days) + ' </p></div>'+
	                  '<div class="hour"><p>' + this.leadingZeros(data.hours, 2) + ' </p></div>'+
	                  '<div class="min"><p>' + this.leadingZeros(data.min, 2) + ' </p></div>'+
	                  '<div class="sec"><p>' + this.leadingZeros(data.sec, 2) + ' </p></div>'
	              );
	            }
	        });
	    }
	</script>
    <script>

        $(document).on('submit','#addToCartForm',function(){

            var product_id = $(this).find('input[name="product_id"]').val();

            $(".prodid-" +product_id).prepend(' <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> ');


            $(".fields-message").html('');

            $.ajax({

                type: 'post', // or post?

                dataType: 'json',

                url: $(this).attr('action'),

                data: $( this ).serialize(),

                success: function(json) {



                    if(json.error){

                        if(json.message == 'error_option_not_allowded'){
                            alert('@siteLang('error_option_not_allowded')');
                            location.reload();
                        } else if(json.message == 'should_choose_options'){

                            $.each( json.emptyOptionsRequired ,function(k,v){

                                $(".option__" + k).html('<div class="alert-danger" style="padding:5px;border-radius:4px;">@siteLang('select') '+ v.option_name+'</div>');

                            });

                            $(".prodid-" +product_id + " i").remove();

                        }

                        return false;

                    }

                    $(".prodid-" +product_id + " i").remove();

                    $("#addded-to-cart .modal-body img").attr('src',json.image);

                    $("#addded-to-cart .modal-body h2 span").html(json.name);

                    $('#addded-to-cart').modal('show');


                    if(json.totalItems > 0){

                        $("#miniCartTotalViews").removeClass('hidden').html(json.totalItems)

                    }else{

                        $("#miniCartTotalViews").addClass('hidden').html('')

                    }


                    $(".mini-cart-area").load("<?php echo e(route('site.cart.minicart')); ?>");

                    $('#quick-view').removeClass('md-show');

                },

                error: function(xhr, textStatus, thrownError) {

                    alert(xhr.status);

                    alert(thrownError);

                }

            });

            return false;

        })

        $(document).on('click','.btn-quickview',function(){

            var url = '<?php echo e(route('site.product.mini_product')); ?>'+'?product_id='+$(this).data('id');

            $('#quick-view').find('.product-info').html('<div class="spinner">Loading...</div>');

            $('#quick-view').find('.product-info').load(url);
        })

    </script>

    <script type="text/javascript">
        $(document).ready(function(){
         //    $('.chosen-select').select2({
            //     minimumResultsForSearch: Infinity
            // });

            $(".register-gg").click(function(){
                $("#Modal-login").modal('hide');
                setTimeout(function(){
                    $("#Modal-register").modal('show');
                },500);
            });
        });
    </script>

    <script type="text/javascript">


        function addToCart( product_id , quantity = 1 ){

            var btn = $(".prodid-" +product_id);

            if(btn.data('options') == 1){
                window.location.replace(btn.data('url'));
                return false;
			}

            btn.prepend(' <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> ');

            $.ajax({

                headers: {

                 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'

                },

                type: 'post', // or post?

                dataType: 'json',

                url: "<?php echo e(route('site.cart.add')); ?>" , // change as needed

                data: {product_id:product_id , quantity:quantity } , // if you are posting

                success: function(json) {

                    if(json.error){

                        if(json.message == 'should_choose_options'){

                            return window.location.href = json.productUrl;

                        }

                    }

                    $(".prodid-" +product_id + " i").remove();

                    $("#addded-to-cart .modal-body img").attr('src',json.image);

                    $("#addded-to-cart .modal-body h2 span").html(json.name);

                    $('#addded-to-cart').modal('show');

                    if(json.totalItems > 0){

                        $("#miniCartTotalViews").removeClass('hidden').html(json.totalItems)

                    }else{

                        $("#miniCartTotalViews").addClass('hidden').html('')

                    }



                    $(".mini-cart-area").load("<?php echo e(route('site.cart.minicart')); ?>");

                },

                error: function(xhr, textStatus, thrownError) {

                    alert(xhr.status);

                    alert(thrownError);

                }

            });

            return ;

        }



        function addToFav( product_id ){

            $(".favourite-" +product_id).html('<i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>');

            $.ajax({

                headers: {

                 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'

                },

                type: 'post', // or post?

                dataType: 'json',

                url: "<?php echo e(route('site.profile.favorites.add')); ?>" , // change as needed

                data: {product_id:product_id } , // if you are posting

                success: function(json) {

                    if( json.attached == product_id ){

                        $(".favourite-" + product_id ).html('<i class="fa fa-heart"></i>').addClass('active');

                    }else{

                        $(".favourite-" + product_id ).html('<i class="far fa-heart"></i>').removeClass('active');

                    }

                },

                error: function(xhr, textStatus, thrownError) {

                    alert(xhr.status);

                    alert(thrownError);

                }

            });

            return ;



        }





        $(function(){

           $('[data-tooltip="tooltip"]').tooltip();



            $("body").on('submit','#do-login',function(){



                $(".error-messages").html('');

                $(this).find('.submitLogin').prepend(' <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> ');



                $.ajax({

                    type: 'post', // or post?

                    dataType: 'json',

                    url: $(this).attr('action'),

                    data: $( this ).serialize(),

                    success: function(json) {

                        if( json.error ){

                            switch( json.message ){

                                case 'account_not_active' : m = '@siteLang('account_no_activated')'; break;

                                case 'error' : m = '@siteLang('login_information_incorrect')'; break;

                            }

                            $(".error-messages").html('<div class="alert alert-danger">' + m + '</div>');

                        }else{

                            location.reload();

                        }

                        $('.submitLogin').find('i').remove();





                    },

                    error: function(xhr, textStatus, thrownError) {

                        alert(xhr.status);

                        alert(thrownError);

                    }

                });







                return false;

            });



            $("body").on('submit','#do-register',function(){

                $(".error-messages").html('');

                $(this).find('.submitRegister').prepend(' <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> ');



                $.ajax({

                    type: 'post', // or post?

                    dataType: 'json',

                    url: $(this).attr('action'),

                    data: $( this ).serialize(),

                    success: function(json) {

                        if( json.error ){



                            var blkstr = $.map(json.messages, function(val,index) {

                                 var str = val + "<br />";

                                 return str;

                            }).join("");



                            $(".error-messages").html('<div class="alert alert-danger">' + blkstr + '</div>');

                        }else{

                            location.href = '<?php echo e(route('site.profile.index')); ?>';

                        }

                        $('.submitRegister').find('i').remove();





                    },

                    error: function(xhr, textStatus, thrownError) {

                        alert(xhr.status);

                        alert(thrownError);

                    }

                });







                return false;

            });





            $('.dropdown-menu').click(function(e) {

                if (e.target.nodeName !== 'BUTTON') e.stopPropagation();

            });



            $("body").on('change','.country',function(){

                var cid = $(this).val();

                var url = "<?php echo e(url('/cities')); ?>/"+cid

                $.ajax({

                   url: url,

                   data: {},

                   type: 'GET',

                   error: function() {

                      //$('.loading-area').html('حدث خطأ ما .. حاول مرة اخرى');

                   },

                   success: function(data) {



                            // $(".loading-area").html('');

                            $(".address-city").html(data);

                            cityLoaded = 1;

                   },

                });





                return false;

            });





            $("body").on('submit','.contactUsForm',function(){



                $(".contactUsForm-loading").html(' <i class="fa fa-spinner fa-spin fa-1x fa-fw"></i> جاري الارسال ,, انتظر قليلا');



                $.ajax({

                    type: 'post', // or post?

                    dataType: 'json',

                    url: $(this).attr('action'),

                    data: $( this ).serialize(),

                    success: function(json) {

                        if( json.error ){



                            var blkstr = $.map(json.messages, function(val,index) {

                                 var str = val + "<br />";

                                 return str;

                            }).join("");



                            $(".contactUsForm-loading").html('<div class="alert alert-danger">' + blkstr + '</div>');

                        }else{

                            $(".contactUsForm-loading").html('<div class="alert alert-success">تم ارسال الرساله</div>');

                            setTimeout(function(){

                                $(".contactUsForm-loading").html('');

                                $(".contactUsForm input,.contactUsForm textarea").val('');



                            },3000);



                        }



                    },

                    error: function(xhr, textStatus, thrownError) {

                        alert(xhr.status);

                        alert(thrownError);

                    }

                });







                return false;

            });







            // $("body").on('click','.trush-itemCart-mini',function(){

            // 	var id = $(this).attr('data-product-id');

            // 	alert(id)

            // 	$.ajax({

            // 		headers: {

            // 		 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'

            // 		},

            // 		type: 'post', // or post?

            // 		dataType: 'json',

            // 		url: "<?php echo e(route('site.cart.delete')); ?>" , // change as needed

            // 		data: { product_id:id } , // if you are posting

            // 		success: function(json) {

            // 			$("#item-pro-" + id ).addClass('red');



            // 			$("#totalPricespan").html(json.totalPrice);

            // 			$("#discountAmount").html(json.discountAmount);

            // 			$("#totalPriceAfterDiscount").html(json.totalPriceAfterDiscount);





            // 			if(json.totalItems > 0){

            // 				$("#miniCartTotalViews").removeClass('hidden').html(json.totalItems)

            // 			}else{

            // 				$("#miniCartTotalViews").addClass('hidden').html('')

            // 			}





         //                $(".mini-cart-area").load("<?php echo e(route('site.cart.minicart')); ?>");



         //                setTimeout(function(){

            // 				$("#miniCartTotalViews").addClass('hidden').html('')

         //                },3000)



            // 		},

            // 		error: function(xhr, textStatus, thrownError) {

            // 			alert(xhr.status);

            // 			alert(thrownError);

            // 		}

            // 	});

            // 	return false;

            // });





        });



        function deleteProductFromCart( product_id ) {

            $.ajax({

                headers: {

                 'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'

                },

                type: 'post', // or post?

                dataType: 'json',

                url: "<?php echo e(route('site.cart.delete')); ?>" , // change as needed

                data: { product_id:product_id } , // if you are posting

                success: function(json) {



                    $("#totalPricespan").html(json.totalPrice);

                    if( json.discountAmount == 0 ){
                        $(".display-discount-div").html('');
                    }

                    $("#discountAmount").html(json.discountAmount + ' <?php echo e(currentCurrencySymbols()); ?>');

                    $("#totalPriceAfterDiscount").html(json.totalPriceAfterDiscount + ' <?php echo e(currentCurrencySymbols()); ?>');


                    $("#item-product-" + product_id ).remove();


                    if(json.totalItems > 0){

                        $("#miniCartTotalViews").removeClass('hidden').html(json.totalItems)

                    }else{

                        $("#miniCartTotalViews").addClass('hidden').html('')

                    }



                    $(".mini-cart-area").load("<?php echo e(route('site.cart.minicart')); ?>");



                },

                error: function(xhr, textStatus, thrownError) {

                    alert(xhr.status);

                    alert(thrownError);

                }

            });

            return false;

        }

        function deleteVoucherFromCart( voucher_id ) {

            $.ajax({

                headers: {

                    'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'

                },

                type: 'post', // or post?

                dataType: 'json',

                url: "<?php echo e(route('site.cart.delete')); ?>" , // change as needed

                data: { voucher_id: voucher_id } , // if you are posting

                success: function(json) {


                    $("#totalPricespan").html(json.totalPrice);

                    if( json.discountAmount == 0 ){
                        $(".display-discount-div").html('');
                    }

                    $("#discountAmount").html(json.discountAmount + ' <?php echo e(currentCurrencySymbols()); ?>');

                    $("#totalPriceAfterDiscount").html(json.totalPriceAfterDiscount + ' <?php echo e(currentCurrencySymbols()); ?>');


                    $("#item-voucher-" + voucher_id ).remove();


                    if(json.totalItems > 0){

                        $("#miniCartTotalViews").removeClass('hidden').html(json.totalItems)

                    }else{

                        $("#miniCartTotalViews").addClass('hidden').html('')

                    }



                    $(".mini-cart-area").load("<?php echo e(route('site.cart.minicart')); ?>");



                },

                error: function(xhr, textStatus, thrownError) {

                    alert(xhr.status);

                    alert(thrownError);

                }

            });

            return false;

        }


    </script>


<?php echo $__env->yieldContent('footer'); ?>



<!-- Global site tag (gtag.js) - Google Analytics -->





  

  

  



  





</body>

</html>
