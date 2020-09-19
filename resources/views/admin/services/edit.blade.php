@extends('admin.layout')

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">service</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>


                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="{{ url('admin/services') }}" class="m-nav__link">

                            <span class="m-nav__link-text">service</span>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                           <span class="m-nav__link-text">Edit service</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">







		<form class="m-form" method="post" action="{{ url('admin/services/update/' . $service->id ) }}" >

			{{ csrf_field() }}

      <input type="hidden" name="id" value="{{ $service->id }}" />

			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

			        		<div class="tab-pane active" role="tabpanel" id="general-tb">

                    <div class="form-group m-form__group row">

    									<label for="name" class="col-2 col-form-label">Service Name  :</label>

    									<div class="col-10">

    										<input type="text" id="name" class="form-control m-input" name="name" value="{{ $service->name}}">

    									</div>

    								</div>

                    <div class="form-group m-form__group row">

                      <label for="vsion" class="col-2 col-form-label">vsion  :</label>

                      <div class="col-10">

                        <input type="text" id="vsion" class="form-control m-input" name="vsion" value="{{ $service->vsion}}">

                      </div>

                    </div>


              <div class="form-group m-form__group row">

                <label for="icon" class="col-2 col-form-label">icon  :</label>

                    <div class="col-10">

             <input type="text" id="icon" class="form-control m-input" name="icon" value="{{ $service->icon}}">

           </div>
          </div>


							<!-- media -->

							</div>



			            </div>

			        </div>

			    </div>

				<div class="m-portlet__foot m-portlet__foot--fit">

					<div class="m-form__actions m-form__actions">



						<button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">Save Edits </button>



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
