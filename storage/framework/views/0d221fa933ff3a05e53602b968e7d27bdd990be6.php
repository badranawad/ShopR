<?php $__env->startSection('content'); ?>



<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">المنتج</h3>            

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="<?php echo e(route('admin.products.index')); ?>" class="m-nav__link">

                            <span class="m-nav__link-text">المنتج</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <span class="m-nav__link-text">اضافة منتج  جديد</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->             

   

    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">

		<form class="m-form" method="post" action="<?php echo e(route('admin.products.store')); ?>">

			<?php echo e(csrf_field()); ?>


			<div class="m-portlet m-portlet--tabs">

			    <div class="m-portlet__head">

			        <div class="m-portlet__head-tools">

			            <ul class="prodHeadz nav nav-tabs m-tabs-line m-tabs-line--info m-tabs-line--2x">

			                <li class="nav-item m-tabs__item">

			                    <a class="nav-link m-tabs__link active" href="#general-tb">تفاصيل عامة</a>

			                </li>

			                <li class="nav-item m-tabs__item">

			                    <a class="nav-link m-tabs__link" href="#details-tb">بيانات</a>

			                </li>
			                <li class="nav-item m-tabs__item">
			                    <a class="nav-link m-tabs__link " href="#media-tb">وسائط</a>
			                </li>

			                
			            </ul>

			        </div>

			    </div>

			    <div class="m-portlet__body"> 

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			        		<div class="tab-pane active" role="tabpanel" id="general-tb">

			        			<div class="form-group m-form__group row">

									<label for="tower_title" class="col-2 col-form-label">اسم المنتج  :</label>

									<div class="col-10">

										<input type="text" id="title" class="form-control m-input" name="title" value="<?php echo e(old('title')); ?>">

									</div>

								</div>

			        			<div class="form-group m-form__group row m--margin-top-40">

									<label for="description" class="col-2 col-form-label">تفاصيل المنتج  :</label>

									<div class="col-10">

										<textarea id="description" class="summernote" name="description"><?php echo e(old('description')); ?></textarea>

									</div>

								</div>

								<div class="form-group m-form__group row m--margin-top-40">

									<label for="pageTitle" class="col-2 col-form-label">الحالة :</label>

									<div class="col-10">

										<span class="m-switch m-switch--lg m-switch--info m-switch--icon">

												<label>

						                        <input type="checkbox" name="status" value="1">

						                        <span></span>

						                        </label>

						                    </span>

									</div>

								</div>

							</div>

							<!-- details -->

							<div class="tab-pane" role="tabpanel" id="details-tb">

								

								

							

								<div class="form-group m-form__group row">

									<label for="price" class="col-2 col-form-label">السعر :</label>

									<div class="col-10">

										<input type="text" id="price" class="form-control m-input" name="price" value="<?php echo e(old('price')); ?>">

									</div>

								</div>
							

								<div class="form-group m-form__group row">

									<label for="after_discount" class="col-2 col-form-label">السعر بعد التخفيض :</label>

									<div class="col-10">

										<input type="text" id="after_discount" class="form-control m-input" name="after_discount" value="<?php echo e(old('after_discount')); ?>">

									</div>

								</div>

							

							<!-- media -->

							</div>
							<div class="tab-pane" role="tabpanel" id="media-tb">
								<label>الصورة</label> 


								<?php echo showMediaUploaderButton( 'productGallery' , 'productGallery' , 'single'  ); ?>

								<br />
                             
							</div>


			            </div>



			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">اضافة المنتج </button>



					</div>

				</div>



			</div>

		

		</form>



	</div>

</div>





<?php $__env->stopSection(); ?>









<?php $__env->startSection('footer'); ?>

<?php echo e(queueMediaUpload()); ?>


<script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>





<script type="text/javascript">

function isCheckedById( class_ ) {

	$("." + class_ ).slideToggle()

}

$(function(){

	$(".prodHeadz.nav.nav-tabs.m-tabs-line li a").click(function(){

		$(".prodHeadz.nav.nav-tabs.m-tabs-line li a").removeClass('active');

		$(this).addClass('active')



		$(".prodHeadz > .tab-pane").removeClass('active');

		$($(this).attr('href')).addClass('active')

		return false;

	});





		$('.datePicker').datepicker({

		    orientation: "bottom right",

		    format : "yyyy-mm-dd",

		    templates: {

		        leftArrow: '<i class="la la-angle-left"></i>',

		        rightArrow: '<i class="la la-angle-right"></i>'

		    }

		});





	



	$("body").on('change','.typee',function(){

		var type = $(this).val();

		if( type == 'select' || type == 'radio' || type == 'checkbox' ){

			$(this).parent().parent().parent().parent().find(".extra-f").fadeIn();

		}else{

			$(this).parent().parent().parent().parent().find(".extra-f").fadeOut();

		}

	});







	$("body").on('click','.remove-extra-fields',function(){

		var id = $(this).attr('data-id');

		$('.' + id).remove();

	});



    $('.m-select2').select2({

        placeholder: "حدد عنصر"

    });



     

   

    });

    

</script>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout',['title' => 'اضافه منتج جديد'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>