<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-6 col-lg-offset-3">
        <div class="login">
          <div class="login-form-container">
            <div class="login-text">
            <h3>Login</h3>
            <p>Please Login.</p>
            </div>

            <?php if( session('error') ): ?>
              <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
            <?php endif; ?>

            <form class="login-form" role="form" method="post" action="<?php echo e(url('/login')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                  <div class="controls">
                  <input type="text" class="form-control" placeholder="Username" name="email">
                  </div>
                </div>
              <div class="form-group">
                <div class="controls">
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
              </div>
              <div class="button-box">
                <div class="login-toggle-btn">
                  <input type="checkbox">
                    <label>Remember me</label>
                  <!-- <a href="#">Forgot Password?</a> -->
                </div>
                <button type="submit" class="btn btn-common log-btn">Login</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<br>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
