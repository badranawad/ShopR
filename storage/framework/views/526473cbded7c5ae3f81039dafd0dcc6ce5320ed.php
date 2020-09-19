<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="http://localhost/mohammed"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> Shopping cart</span>
<h2 class="entry-title"> Shopping cart </h2>
</div>
</div>
</div>
</div>
</div>

<div class="empty-cart text-center" style="margin:50px 0;">

					<h2>There are no products in your cart</h2>
					<br>
					<br>
					<a href="<?php echo e(url('/')); ?>" class="btn btn-primary" style="width: 200px;    margin-bottom: 100px;">Continue shopping</a>

					<br>



				</div>
				<br>

<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
