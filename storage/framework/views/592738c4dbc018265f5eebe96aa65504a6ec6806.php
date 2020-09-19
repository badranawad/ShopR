<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> Shopping cart</span>
<h2 class="entry-title"> Shopping cart </h2>
</div>
</div>
</div>
</div>
</div>
<div class="container">
  <form method="post" action="<?php echo e(url('')); ?>/checkout/store">
 <?php echo e(csrf_field()); ?>

					<br>
          <div id="content">
          <div class="container">
          <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">

          <h2 class="title-checkout"><i class="icon-user"></i>Name & Address</h2>


          <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Full Name <sup>*</sup></label>
                  <input class="form-control" type="text" name="name">
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label> Country </label>
                <input class="form-control" type="text" name="country">
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                <label> City </label>
                <input class="form-control" type="text" name="city">
                </div>
              </div>




              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label> Address <sup>*</sup></label>
                  <input class="form-control" type="text" name="address">
                </div>
              </div>

            </div>
          </div>


          </div>
          <div class="mb-50"></div>
          <div class="row">
          <div class="col-md-12 col-sm-12 col-sx-12">
          <div class="order-details">
          <h2 class="title-checkout"><i class="icon-basket-loaded-loaded"></i>Your Order</h2>
          <div class="order_review margin-bottom-35">
          <table class="table table-responsive table-review-order">
          <thead>
          <tr>
          <th class="product-name">Product</th>
          <th class="product-total">Total</th>
          </tr>
          </thead>
          <tbody>
            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
          <td><p><?php echo e($cart->product->title); ?></p></td>
          <td><p class="price"><?php echo e($cart->product->price()); ?></p></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
          <tfoot>
           <tr>
          <th>Total</th>
          <td>
          <p class="price"><?php echo e($cart->cartTotalWithIcon()); ?></p>
          </td>
          </tr>


          </tfoot>
          </table>
          </div>
          </div>
          </div>
          <div class="col-md-6 col-sm-6 col-sx-12">


          <div class="card card--padding fill-bg">
          <table class="table-total-checkout">
          </table>
          <button  type="submit" class="btn btn-common btn-full">Checkout Now <span class="icon-action-redo"></span></button>
          </div>

          </div>
          </div>
          </div>

</form>
</div>
</div>
<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
