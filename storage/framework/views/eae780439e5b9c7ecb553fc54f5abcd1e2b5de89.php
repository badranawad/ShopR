<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"><?php echo e($product->title); ?></span>
<h2 class="entry-title"><?php echo e($product->title); ?></h2>
</div>
</div>
</div>
</div>
</div>
<section id="product-collection" class="section">
<div class="container">
<div class="row">
<?php if( $product->image ): ?>
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="product-details-image" >
  <img src="<?php echo e($product->image()); ?>"/>
</div>
<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></ul>
</div>
<?php endif; ?>


<div class="col-md-8 col-sm-6 col-xs-12">
<div class="info-panel">
<h1 class="product-title"><?php echo e($product->title); ?></h1>

<div class="price-ratting">
<div class="price float-left">
  <h5 class="sub-title">price</h5>
<?php echo e($product->price()); ?>

</div>

</div>

<div class="short-desc">
<h5 class="sub-title">Quick Overview</h5>
 <?php echo $product->description; ?>

</div>

<div class="quantity-cart">
  <a href="<?php echo e(url('/cart/add/'.$product->id)); ?>">
<button class="btn btn-common"><i class="icon-basket-loaded-loaded"></i> add to cart</button>
  </a>
</div>



<div class="share-icons pull-right">
<span>share :</span>
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-pinterest"></i></a>
</div>
</div>
</div>
</div>
</div><br><br>
</section>
<br><br>
<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
