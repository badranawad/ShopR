<?php echo $__env->make('site.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="<?php echo e(url('/')); ?>"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> Shopping cart</span>
<h2 class="entry-title"> Shopping cart </h2>
</div>
</div>
</div>
</div>
</div>
<div class="container">

					<br>

		<div class="table-cartView">
			 <table class="table table-cart" id="ResponsiveTable">
				 <thead>
				  	<tr id="HeadRow">
              <th>images</th>
              <th class="th-title-pro">Address</th>
              <th>unit price</th>
	            <th>quantity</th>
              <th>Price</th>
	            <th>Remove</th>
					</tr>
							</thead>


			     <tbody>
             <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		          <tr id="item-product-848">
		             <td tableheaddata="images">
				            	<a href="#" class="cI-thumb">
					          	<img style="width:50px" src="<?php echo e($cart->product->image()); ?>" alt="">
					          	</a>
					    	</td>
				       	<td tableheaddata="Address">
	                  <h2 class="item--name"><a href="<?php echo e($cart->product->url()); ?>"><?php echo e($cart->product->title); ?></a></h2>
					     	</td>
								<td tableheaddata="unit price" class="product-price-item-848">
										<?php echo e($cart->product->price()); ?>

									</td>
									<td tableheaddata="quantity">
										<div class="quantity">
                      <input type="text" name="product[848]" value="<?php echo e($cart->qty); ?>" id="count-quat" class="count-quat jsQuantity" readonly="">

				           </div>
			       	</td>
									<td tableheaddata="Price">
										<span id="product-price-848">
											<?php echo e($cart->productTotalPrice()); ?>

										</span>
									</td>
									<td tableheaddata="Remove">
										<a href="<?php echo e(url('cart/delete/' . $cart->id )); ?>" data-product-id="848" class="trush-product-itemCart remove-item"><i class="icon-close" aria-hidden="true"></i></a>
									</td>
								</tr>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							</tbody>
						</table>
					</div>
				</div>


				<div class="row">

										<div class="col-lg-offset-6 col-lg-6 col-md-offset-4 col-md-8">

											<div class="cart-totals clearfix">


												<div class="ct-left" style="border-right: 0px;">

													<h2>Total amount |<span id="totalPriceAfterDiscount"><?php echo e($cart->cartTotalWithIcon()); ?></span></h2>


												</div>

											</div>

											<div class="cart-action clearfix">
												<br />

												<a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Continue shopping</a>

												<a href="<?php echo e(url('/checkout')); ?>" class="btn btn-primary">Checskout</a>

												<br />
												<br />
												<br />
											</div>

										</div>

									</div>



<br><br>
<br>
<br>
<br>
<br>
<br>
<br>










<?php echo $__env->make('site.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
