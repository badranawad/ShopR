@extends('admin.layout',['title' => 'Add new order'])





@section('content')



<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">order</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="{{ url('') }}/admin/orders" class="m-nav__link">

                            <span class="m-nav__link-text">order</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <span class="m-nav__link-text">Add new order</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">

		<form class="m-form" method="post" action="{{ url('') }}/admin/orders/store">

			{{ csrf_field() }}

			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			        		<div class="tab-pane active" role="tabpanel" id="general-tb">

			        			<div class="form-group m-form__group row">

									<label for="name" class="col-2 col-form-label">customer Name  :</label>

									<div class="col-10">

										<input type="text" id="name" class="form-control m-input" name="name" value="{{ old('name') }}">

									</div>

								</div>


                <div class="form-group m-form__group row">

                <label for="email" class="col-2 col-form-label">Email  :</label>

                <div class="col-10">

                <input type="email" id="email" class="form-control m-input" name="email" value="{{ old('email') }}">

              </div>

                </div>


                <div class="form-group m-form__group row">

              <label for="country" class="col-2 col-form-label">Country:</label>

              <div class="col-10">

                <input type="text" id="country" class="form-control m-input" name="country" value="{{ old('country') }}">

              </div>

            </div>



            <div class="form-group m-form__group row">

          <label for="city" class="col-2 col-form-label">City:</label>

          <div class="col-10">

            <input type="text" id="city" class="form-control m-input" name="city" value="{{ old('city') }}">

          </div>

        </div>




                <div class="form-group m-form__group row">

              <label for="address" class="col-2 col-form-label">Address   :</label>

              <div class="col-10">

                <input type="text" id="address" class="form-control m-input" name="address" value="{{ old('address') }}">

              </div>

            </div>










        <div class="form-group m-form__group row">

      <label for="phone" class="col-2 col-form-label">Phone:</label>

      <div class="col-10">

        <input type="number" id="phone" class="form-control m-input" name="phone" value="{{ old('phone') }}">

      </div>

    </div>




							<!-- media -->

							</div>

			            </div>



			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Add Order </button>



					</div>

				</div>



			</div>



		</form>



	</div>

</div>





@endsection









@section('footer')

<script src="{{ url('/') }}/assets/admin/demo/default/custom/components/forms/widgets/summernote.js" type="text/javascript"></script>

@endsection
