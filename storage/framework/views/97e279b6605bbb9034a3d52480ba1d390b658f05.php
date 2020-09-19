<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> MyOrder</span>
<h2 class="entry-title">MyOrder</h2>
</div>
</div>
</div>
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-12 col-sm-12 col-sx-12">
<div class="order-details">
<div class="order_review margin-bottom-35">
<table class="table table-responsive table-review-order">
<thead>
<?php if($orders->count()!=0): ?>
<h2 class="text-center"><i class="icon-basket-loaded-loaded"></i>MY Order</h2>
<br>
  <tr>
  <th class="text-center">Product</th>
  <th class="text-center">Price</th>
  <th class="text-center">qty</th>
  <th class="text-center">Total</th>
  <th class="text-center">Purchase Time</th>
  <th class="text-center">status</th>

  </tr>

<?php endif; ?>
</thead>
<tbody>
  <?php $__empty_1 = true; $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <?php $__currentLoopData = $order->orderProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
        <td class="text-center"><p class="price"> <?php echo e($OrderProduct->product_name); ?></p></td>
        <td class="text-center"><p class="price"><?php echo e($OrderProduct->price()); ?></p></td>
        <td class="text-center"><p class="price"><?php echo e($OrderProduct->qty); ?></p></td>
        <td class="text-center"><p class="price"><?php echo e($OrderProduct->total()); ?></p></td>
        <td class="text-center"><p class="price"><?php echo e($OrderProduct->created_at); ?></p></td>
        <td class="text-center"><p class="price"><?php echo e($order->status()); ?></p></td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<br><br><br>
<div class="empty-cart text-center" style="margin:50px 0;">
    <h2>There are no Orders.</h2>
    <br><br>
</div>

<?php endif; ?>
<br>

</tbody>
<tfoot>
</tfoot>
</table>
<br>
<br>
<br>
<br><br>
<br>


</div>
</div>
</div>
</div>

<br><br>
<br>
<br>
<br>
<br>


<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
