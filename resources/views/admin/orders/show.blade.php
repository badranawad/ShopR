@extends('admin.layout',['title' => 'Add new order'])





@section('content')



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

									Application Details No.{{ $order->id }}

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

									<label class="col-12 col-form-label">customer Name : <strong class="m--font-info">{{ $order->name }}</strong></label>

								</div>



								<div class="m-form__group row">

									<label class="col-12 col-form-label">E-mail : <strong class="m--font-info">{{ $order->email }}</strong></label>

								</div>



								<div class="m-form__group row">

									<label class="col-12 col-form-label">phone : <strong class="m--font-info">{{ $order->phone }}</strong></label>

								</div>



							</div>





							<div class="col-6">



								<h3>order</h3>





								<div class="m-form__group row">

									<label class="col-12 col-form-label">The date of application : <strong class="m--font-info">{{ $order->created_at}}</strong></label>

								</div>
								<div class="m-form__group row">

									<label class="col-12 col-form-label">Payment method : <strong class="m--font-info">cash on delivery </strong></label>

								</div>








								<div class="m-form__group row">

									<label class="col-12 col-form-label">The selected currency : <strong class="m--font-info">U.S. Dollar</strong></label>

								</div>

								<div class="m-form__group row">

									<label class="col-12 col-form-label">Order status : <strong Order statusclass="m--font-info">{{ $order->status()}}</strong></label>

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

									{{ $order->name }}<br>

									Country / {{ $order->country }}<br>

									 City / {{ $order->city }}<br>
								Address / {{ $order->address }}	<br>

									Phone : {{ $order->phone }}

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


@foreach( $order->orderProduct as $OrderProduct )

							<tr>
								<td class="text-center">{{ $OrderProduct->product_name  }}</td>

								<td class="text-center">{{ $OrderProduct->qty  }}</td>

								<td class="text-center">{{ $OrderProduct->price()  }}</td>

								<td class="text-center">{{ $OrderProduct->total() }}</td>

							</tr>


@endforeach

							<tr>
<td></td>
<td></td>
								<td colspan="4" class="text-right" >The total amount :{{ $OrderProduct->total }}$</td>
<td></td>

							</tr>


							</tbody>

						</table>

		            </div>
				</div>
			</div>

		</div>
		<form class="m-form" method="post" action="{{ url('') }}/admin/orders/update/{{ $order->id }}">

			{{ csrf_field() }}

			<div class="m-portlet m-portlet--tabs">


					<div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

								<div class="tab-content prodHeadz">

							<!-- general -->

									<div class="tab-pane active" role="tabpanel" id="general-tb">

										<div class="form-group m-form__group row">

									<label for="name" class="col-2 col-form-label">Order status  :</label>
									<select class="" name="status">
										@foreach(config('statuses') as $key => $value)
											<option value="{{ $key }}">{{ $value }}</option>
										@endforeach
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





@endsection









@section('footer')

<script src="{{ url('/') }}/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

@endsection
