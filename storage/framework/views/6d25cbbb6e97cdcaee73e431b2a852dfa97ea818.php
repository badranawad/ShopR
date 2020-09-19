<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<div class="row">
  <div class="col-md-12 col-lg-6 col-lg-offset-3">
    <div class="login">
      <div class="login-form-container">
          <div class="login-text">
            <h3>Register</h3>
            <p>Please Register using account detail bellow.</p>
          </div>

          <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
          <?php endif; ?>


          <form class="login-form" role="form" method="post">
            <?php echo e(csrf_field()); ?>

            <div class="form-group">
                <div class="controls">
                  <input type="text" class="form-control" placeholder="Username" name="name">
                </div>
            </div>

            <div class="form-group">
                <div class="controls">
                  <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
            </div>
            <div class="form-group">
            <div class="controls">
              <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            </div>
            <div class="form-group">
                <div class="controls">
                  <input type="number" class="form-control" placeholder="PhoneNumber" name="phone">
                </div>
            </div>
                <div class="button-box">
                  <button type="submit" class="btn btn-common log-btn">Register</button>
                </div>
          </form>

      </div>
    </div>
  </div>
</div>
<br>
<br>
<br>
<br>


<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
