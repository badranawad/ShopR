<?php $__env->startSection('title' , 'الصفحة الرئيسية'); ?>

<?php $__env->startSection('content'); ?>



<div class="m-subheader ">
	<div class="d-flex align-items-center">
 		<div class="mr-auto">
 			<h3 class="m-subheader__title ">لوحة تحكم </h3>			
		</div>
	</div>
</div>

<div class="m-content">

	<div class="m-portlet">
  		<div class="m-portlet__body m-portlet__body--no-padding">

    		<div class="row m-row--no-padding m-row--col-separator-xl">

      			


      			<div class="col-md-12 col-lg-12 col-xl-6">
        			<!--begin:: Widgets/Stats2-1 -->
					<div class="m-widget1">
						<div class="m-widget1__item">
							<div class="row m-row--no-padding align-items-center">
								<div class="col">
									<h3 class="m-widget1__title"><i class="flaticon-rocket"></i>المنتجات</h3>
								</div>
								<div class="col m--align-center">
									<span class="m-widget1__number m--font-brand"><?php echo e(App\Product::count()); ?></span>
								</div>
							</div>
						</div>
					</div>

				</div>




			</div>


		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="m-portlet m-portlet--full-height m-portlet--skin-light m-portlet--fit ">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								احصائيات
							</h3>
						</div>
					</div>

					<div class="m-portlet__head-tools" style="direction: ltr;">
						<ul class="nav nav-pills nav-pills--brand m-nav-pills--align-left m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
							<li class="nav-item m-tabs__item">
								<a class="nav-link m-tabs__link active" data-toggle="tab" href="#" onclick="return yearlyStatistics();" role="tab" aria-selected="true">
								السنة
								</a>
							</li>
							<li class="nav-item m-tabs__item">
								<a class="nav-link m-tabs__link " data-toggle="tab" href="#" onclick="return monthlyStatistics();" role="tab" aria-selected="false">
								الشهر
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="m-widget21" style="min-height: 420px">
						<div class="row">
							<div class="col">
								<div class="m-widget21__item m--pull-right">
									<span class="m-widget21__icon">        
										<a href="#" style="background: #f97a58;border-color: #f97a58" class="btn btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
											<i style="color: #111!important;" class="fa flaticon-coins m--font-light m--font-light"></i>
										</a> 
									</span>
									<div class="m-widget21__info">
										<span class="m-widget21__title">
										المنتجات
										</span><br> 
									</div>
								</div>
							</div>
						
						</div>
						<div class="m-widget21__chart m-portlet-fit--sides" style="height:310px;">
							<canvas id="m_chart_adwords_stats"></canvas>
							<canvas style="display: none;" id="m_chart_adwords_stats2"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>

		
	</div>

	

</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>