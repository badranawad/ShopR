<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">My Account</span>
<h2 class="entry-title">My Account</h2>
</div>
</div>
</div>
</div>
</div>
<br>
<div class="content-innerPage content-innerPage before-bg">
			<div class="container">

        <form method="post" action="<?php echo e(url('')); ?>/profile/update">
       <?php echo e(csrf_field()); ?>

				<div class="profile--page-content">

					<div class="row">
						<div class="col-md-10 col-sm-11">
							<div class="edit-block-page">
								<div class="edit-proHead">
									<h2 class="col-md-6 col-sm-6 col-xs-12">welcome <?php echo e($user->name); ?> </h2>
									<h2 class="col-md-6 col-sm-6 col-xs-12"> <?php echo e($user->email); ?> </h2>
								<br><br>
								<div class="edit-proRow clearfix">
									<br>
									<h2 class="red-title">Edit profile </h2>
<br>
								</div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <br>
                    <h4 class="red-title">Change Name</h4><br>
                      <input type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>">
<br>
                </div>
                <br>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="red-title">Change Email</h4><br>
                      <input type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>">
<br>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-12">
                    <h4 class="red-title">Change Phone</h4>
                    <br>
                      <input type="text" class="form-control" name="phone" value="<?php echo e($user->phone); ?>">
                </div>
                <br>

								<div class="col-md-6 col-sm-6 col-xs-12">
										<h4 class="red-title">Change Password</h4>
<br>
                      <input type="password" class="form-control" name="password" value="<?php echo e($user->password); ?>"><br><br><br>
								</div>



                <table class="table-total-checkout">
                  <button  type="submit" class="btn btn-common btn-full">Save </button>

                </table>
<br><br><br><br><br>


							</div>
						</div>
					</div>

				</div>
</form>
			</div>

		</div>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
