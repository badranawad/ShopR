<?php $__env->startSection('content'); ?>

<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">الطلب</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="<?php echo e(url('admin')); ?>" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="<?php echo e(url('')); ?>/admin/orders" class="m-nav__link">

                            <span class="m-nav__link-text">الطلب</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <span class="m-nav__link-text">اضافة طلب جديد</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">

    <form class="m-form" method="post" action="<?php echo e(url('')); ?>/admin/orders/store">

      <?php echo e(csrf_field()); ?>


      <div class="m-portlet m-portlet--tabs">


          <div class="m-portlet__body">

          <div class="m-form__section m-form__section--first">

                <div class="tab-content prodHeadz">

              <!-- general -->

                  <div class="tab-pane active" role="tabpanel" id="general-tb">

                    <div class="form-group m-form__group row">

                  <label for="name" class="col-2 col-form-label">اسم الطلب  :</label>

                  <div class="col-10">

                    <input type="text" id="name" class="form-control m-input" name="name" value="<?php echo e($order->name); ?>">

                  </div>

                </div>


                <div class="form-group m-form__group row">

                <label for="email" class="col-2 col-form-label">الايميل  :</label>

                <div class="col-10">

                <input type="email" id="email" class="form-control m-input" name="email" value="<?php echo e($order->email); ?>">

                </div>

                </div>




                <div class="form-group m-form__group row">

              <label for="address_1" class="col-2 col-form-label">العنوان   :</label>

              <div class="col-10">

                <input type="text" id="address_1" class="form-control m-input" name="address_1" value="<?php echo e($order->address_1); ?>">

              </div>

            </div>


            <div class="form-group m-form__group row">

          <label for="adres_2" class="col-2 col-form-label">الشارع:</label>

          <div class="col-10">

            <input type="text" id="adres_2" class="form-control m-input" name="adres_2" value="<?php echo e($order->adres_2); ?>">

          </div>

        </div>


        <div class="form-group m-form__group row">

      <label for="city" class="col-2 col-form-label">المدينة:</label>

      <div class="col-10">

        <input type="text" id="city" class="form-control m-input" name="city" value="<?php echo e($order->city); ?>">

      </div>

    </div>




							<!-- media -->

							</div>



			            </div>

			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">حفظ التعديلات </button>



					</div>

				</div>



		</div>





		</form>



	</div>

</div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>


<script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>