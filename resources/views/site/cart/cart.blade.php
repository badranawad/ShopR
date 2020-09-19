@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
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
             @foreach( $carts as $cart )


		          <tr id="item-product-848">
		             <td tableheaddata="images">
				            	<a href="#" class="cI-thumb">
					          	<img style="width:50px" src="{{ $cart->product->image() }}" alt="">
					          	</a>
					    	</td>
				       	<td tableheaddata="Address">
	                  <h2 class="item--name"><a href="{{ $cart->product->url() }}">{{ $cart->product->title }}</a></h2>
					     	</td>
								<td tableheaddata="unit price" class="product-price-item-848">
										{{ $cart->product->price() }}
									</td>
									<td tableheaddata="quantity">
										<div class="quantity">
                      <input type="text" name="product[848]" value="{{ $cart->qty }}" id="count-quat" class="count-quat jsQuantity" readonly="">

				           </div>
			       	</td>
									<td tableheaddata="Price">
										<span id="product-price-848">
											{{ $cart->productTotalPrice() }}
										</span>
									</td>
									<td tableheaddata="Remove">
										<a href="{{ url('cart/delete/' . $cart->id ) }}" data-product-id="848" class="trush-product-itemCart remove-item"><i class="icon-close" aria-hidden="true"></i></a>
									</td>
								</tr>

                @endforeach

							</tbody>
						</table>
					</div>
				</div>


				<div class="row">

										<div class="col-lg-offset-6 col-lg-6 col-md-offset-4 col-md-8">

											<div class="cart-totals clearfix">


												<div class="ct-left" style="border-right: 0px;">

													<h2>Total amount |<span id="totalPriceAfterDiscount">{{ $cart->cartTotalWithIcon() }}</span></h2>


												</div>

											</div>

											<div class="cart-action clearfix">
												<br />

												<a href="{{ url('/') }}" class="btn btn-primary">Continue shopping</a>

												<a href="{{ url('/checkout') }}" class="btn btn-primary">Checskout</a>

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










@include('site.footer')
