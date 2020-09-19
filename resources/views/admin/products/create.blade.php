@extends('admin.layout',['title' => 'Add a new product'])





@section('content')



<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">product</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="{{ url('') }}/admin/products" class="m-nav__link">

                            <span class="m-nav__link-text">product</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <span class="m-nav__link-text">Add a new product</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">

		<form class="m-form" method="post" action="{{ url('') }}/admin/products/store" enctype="multipart/form-data">

			{{ csrf_field() }}

			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			        		<div class="tab-pane active" role="tabpanel" id="general-tb">

			        			<div class="form-group m-form__group row">

									<label for="tower_title" class="col-2 col-form-label">product Name  :</label>

									<div class="col-10">

										<input type="text" id="title" class="form-control m-input" name="title" value="{{ old('title') }}">

									</div>

                </div>







                                    <div class="form-group m-form__group row">

                    									<label for="tower_title" class="col-2 col-form-label">category  :</label>

                    									<div class="col-10">

                                        <select name="categories[]" multiple class="">
                                          @foreach( $categories as $category )
                                          <option value="{{ $category->id }}" >{{ $category->title }}</option>
                                          @endforeach
                                        </select>

                    									</div>

                    								</div>


			        			<div class="form-group m-form__group row m--margin-top-40">

									<label for="description" class="col-2 col-form-label">Product Details  :</label>

									<div class="col-10">

										<textarea id="description" class="summernote" name="description">{{ old('description') }}</textarea>

									</div>

								</div>

								<div class="form-group m-form__group row m--margin-top-40">

									<label for="pageTitle" class="col-2 col-form-label">status :</label>

									<div class="col-10">

										<span class="m-switch m-switch--lg m-switch--info m-switch--icon">

												<label>

						                        <input type="checkbox" name="status" value="1">

						                        <span></span>

						                        </label>

						                    </span>

									</div>

								</div>

                								<div class="form-group m-form__group row m--margin-top-40">

                									<label for="pageTitle" class="col-2 col-form-label">Featured Products  :</label>

                									<div class="col-10">

                										<span class="m-switch m-switch--lg m-switch--info m-switch--icon">

                												<label>

                						                        <input type="checkbox" name="featured" value="1">

                						                        <span></span>

                						                        </label>

                						                    </span>

                									</div>

                								</div>


								<div class="form-group m-form__group row">

									<label for="price" class="col-2 col-form-label">price :</label>

									<div class="col-10">

										<input type="text" id="price" class="form-control m-input" name="price" value="{{ old('price') }}">

									</div>

								</div>


								<div class="form-group m-form__group row">

									<label for="after_discount" class="col-2 col-form-label">Price after discount :</label>

									<div class="col-10">

										<input type="text" id="after_discount" class="form-control m-input" name="after_discount" value="{{ old('after_discount') }}">

									</div>

								</div>

                <div class="form-group m-form__group row">

                  <label for="after_discount" class="col-2 col-form-label">Add image :</label>

                  <div class="col-10">

                    <input type="file" class="form-control" name="image" >

                  </div>

                </div>


							<!-- media -->

							</div>

			            </div>



			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Add Product </button>



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
