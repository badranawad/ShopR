<?php $__env->startSection('title' , 'الصفحة الرئيسية'); ?>

<?php $__env->startSection('content'); ?>



<div class="m-subheader ">
	<div class="row">
		<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="m-subheader__title ">Number of products : <?php echo e($products); ?> </h3>

				</div>
			</div>
		</div>
			<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title ">Number of orders : <?php echo e($orders); ?> </h3>

					</div>
				</div>
			</div>
		</div>
		<div class="row" style="margin-Top:10px">
			<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
				<div class="d-flex align-items-center">
					<div class="mr-auto">
						<h3 class="m-subheader__title ">Number of services : <?php echo e($services); ?> </h3>

					</div>
				</div>
			</div>
				<div class="col-md-4" style="background: #fff;padding: 20PX;border-radius: 21px;margin-right:10px;">
					<div class="d-flex align-items-center">
						<div class="mr-auto">
							<h3 class="m-subheader__title ">Number of users : <?php echo e($users); ?> </h3>

						</div>
					</div>
				</div>
			</div>
	</div>



</div>

<div class="m-content">



</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>