<?php $__env->startSection('content'); ?>



<div class="m-subheader ">



		<div class="row">

			<div class="col-lg-12">

				<!--begin::Portlet-->

				<div class="m-portlet">

					<div class="m-portlet__head">

						<div class="m-portlet__head-caption">

							<div class="m-portlet__head-title">

								<span class="m-portlet__head-icon m--hide">

								<i class="la la-gear"></i>

								</span>

								<h3 class="m-portlet__head-text">

									Application Details No.<?php echo e($order->id); ?>


								</h3>

							</div>

						</div>


						<div class="m-portlet__head-tools">
           <ul class="m-portlet__nav">

						<li class="m-portlet__nav-item">

						<a target="_blank" href="https://tellers.co/works/arba3a/admin/orders/print/36" data-portlet-tool="remove" class="m-portlet__nav-link m-portlet__nav-link--icon" title="" data-original-title="Remove"><i class="fa fa-print"></i></a>

						</li>

					</ul>

					 </div>

					</div>

					<div class="m-portlet__body">



						<div class="row">



							<div class="col-6">



								<h3>Customer</h3>



								<div class="m-form__group row">

									<label class="col-12 col-form-label">customer Name : <strong class="m--font-info"><?php echo e($order->name); ?></strong></label>

								</div>



								<div class="m-form__group row">

									<label class="col-12 col-form-label">E-mail : <strong class="m--font-info"><?php echo e($order->email); ?></strong></label>

								</div>



								<div class="m-form__group row">

									<label class="col-12 col-form-label">phone : <strong class="m--font-info"><?php echo e($order->phone); ?></strong></label>

								</div>



							</div>





							<div class="col-6">



								<h3>order</h3>





								<div class="m-form__group row">

									<label class="col-12 col-form-label">The date of application : <strong class="m--font-info"><?php echo e($order->created_at); ?></strong></label>

								</div>
								<div class="m-form__group row">

									<label class="col-12 col-form-label">Payment method : <strong class="m--font-info">cash on delivery </strong></label>

								</div>








								<div class="m-form__group row">

									<label class="col-12 col-form-label">The selected currency : <strong class="m--font-info">U.S. Dollar</strong></label>

								</div>

								<div class="m-form__group row">

									<label class="col-12 col-form-label">Order status : <strong Order statusclass="m--font-info"><?php echo e($order->status()); ?></strong></label>

								</div>


							</div>





						</div>





		            </div>



				</div>

				<!--end::Portlet-->





				<!--begin::Portlet-->

				<div class="m-portlet">

					<div class="m-portlet__head">

						<div class="m-portlet__head-caption">

							<div class="m-portlet__head-title">

								<span class="m-portlet__head-icon m--hide">

								<i class="la la-gear"></i>

								</span>

								<h3 class="m-portlet__head-text">

									Shipping Address

								</h3>

							</div>

						</div>

					</div>

					<div class="m-portlet__body">



						<div class="row">



							<div class="col-12">



								<p>

									<?php echo e($order->name); ?><br>

									Country / <?php echo e($order->country); ?><br>

									 City / <?php echo e($order->city); ?><br>
								Address / <?php echo e($order->address); ?>	<br>

									Phone : <?php echo e($order->phone); ?>


								</p>
							</div>
						</div>
		        </div>
				</div>




				<!--end::Portlet-->





				<!--begin::Portlet-->

		<!--end::Portlet-->		<div class="m-portlet">

					<div class="m-portlet__head">

						<div class="m-portlet__head-caption">

							<div class="m-portlet__head-title">

								<span class="m-portlet__head-icon m--hide">

								<i class="la la-gear"></i>

								</span>

								<h3 class="m-portlet__head-text">

									Orders

								</h3>

							</div>

						</div>

					</div>

					<div class="m-portlet__body">



						<table class="table table-bordered">

							<thead>

							<tr>

								<td class="text-center">Orders</td>

								<td class="text-center">qty</td>
								<td class="text-center">Price per product</td>

								<td class="text-center">Total</td>

							</tr>

							</thead>

							<tbody>


<?php $__currentLoopData = $order->orderProduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $OrderProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<tr>
								<td class="text-center"><?php echo e($OrderProduct->product_name); ?></td>

								<td class="text-center"><?php echo e($OrderProduct->qty); ?></td>

								<td class="text-center"><?php echo e($OrderProduct->price()); ?></td>

								<td class="text-center"><?php echo e($OrderProduct->total()); ?></td>

							</tr>


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<tr>
<td></td>
<td></td>
								<td colspan="4" class="text-right" >The total amount :<?php echo e($OrderProduct->total); ?>$</td>
<td></td>

							</tr>


							</tbody>

						</table>

		            </div>
				</div>
			</div>

		</div>
		<form class="m-form" method="post" action="<?php echo e(url('')); ?>/admin/orders/update/<?php echo e($order->id); ?>">

			<?php echo e(csrf_field()); ?>


			<div class="m-portlet m-portlet--tabs">


					<div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

								<div class="tab-content prodHeadz">

							<!-- general -->

									<div class="tab-pane active" role="tabpanel" id="general-tb">

										<div class="form-group m-form__group row">

									<label for="name" class="col-2 col-form-label">Order status  :</label>
									<select class="" name="status">
										<?php $__currentLoopData = config('statuses'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
											<ul>
										<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Add Order </button>
											</ul>
								</div>
				</div>
							<!-- media -->
							</div>
									</div>
							</div>
					</div>
		</form>

	</div>





<?php $__env->stopSection(); ?>









<?php $__env->startSection('footer'); ?>

<script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout',['title' => 'Add new order'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>