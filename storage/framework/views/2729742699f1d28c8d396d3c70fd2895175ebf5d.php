<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



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
  <?php $__currentLoopData = $order->orderProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><p><?php echo e($OrderProduct->product()->title); ?></p></td>
<td><p class="price"><?php echo e($OrderProduct->product()->price()); ?></p></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
<tfoot>
 <tr>
<th>Total</th>
<td>
</td>
</tr>


</tfoot>
</table>
</div>
</div>
</div>
</div>




<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
