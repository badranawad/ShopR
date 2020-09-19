<div class="shop-product">
  <div class="product-box">
    <a href="#"><img src="<?php echo e($product->image()); ?>" alt="" height="310px"></a>
    <div class="cart-overlay"></div>
    <?php if($product->isNew()): ?>
      <span class="sticker new"><strong>NEW</strong></span>
    <?php endif; ?>
    <div class="actions">
      <div class="add-to-links">
        <a href="<?php echo e(url('/cart/add/'.$product->id)); ?>" class="btn-cart"><i class="icon-basket-loaded"></i></a>
      </div>
    </div>
  </div>
  <div class="product-info">
    <h4 class="product-title"><a href="<?php echo e($product->url()); ?>"><?php echo e($product->title); ?></a></h4>
    <div class="align-items">
      <div class="pull-left">
        <span class="price"><?php echo e($product->price()); ?></span>
      </div>
      <div class="pull-right">

      </div>
    </div>
  </div>
</div>
