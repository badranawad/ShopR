@extends('admin.layout')

@section('content')

<div class="m-grid__item m-grid__item--fluid m-wrapper">



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">



        <div class="d-flex align-items-center">

            <div class="mr-auto">

                <h3 class="m-subheader__title m-subheader__title--separator">customer</h3>

                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                    <li class="m-nav__item m-nav__item--home">

                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">

                           <i class="m-nav__link-icon la la-home"></i>

                        </a>

                    </li>

                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                        <a href="{{ url('') }}/admin/users" class="m-nav__link">

                            <span class="m-nav__link-text">customer</span>

                        </a>

                    </li>


                    <li class="m-nav__separator">-</li>

                    <li class="m-nav__item">

                           <span class="m-nav__link-text">Edit Customer</span>

                    </li>

                </ul>

            </div>



        </div>

    </div>

    <!-- END: Subheader -->



    <!-- BEGIN: Subheader -->

    <div class="m-subheader ">







		<form class="m-form" method="post" action="{{ url('admin/users/update/' . $user->id ) }}">

			{{ csrf_field() }}

      <input type="hidden" name="id" value="{{ $user->id }}" />

			<div class="m-portlet m-portlet--tabs">


			    <div class="m-portlet__body">

					<div class="m-form__section m-form__section--first">

			        	<div class="tab-content prodHeadz">

							<!-- general -->

              <div class="tab-pane active" role="tabpanel" id="general-tb">

                <div class="form-group m-form__group row">

              <label for="tower_name" class="col-2 col-form-label">customer Name  :</label>

              <div class="col-10">

                <input type="text" id="name" class="form-control m-input" name="name" value="{{ $user->name}}">

              </div>

            </div>


            <div class="form-group m-form__group row m--margin-top-40">

              <label for="pageTitle" class="col-2 col-form-label">Admin  :</label>

              <div class="col-10">

                <span class="m-switch m-switch--lg m-switch--info m-switch--icon">

                    <label>

                                <input type="checkbox" {{ $user->is_admin == 1 ? 'checked="checked"' : '' }} name="is_admin" value="1">

                                <span></span>

                                </label>

                            </span>

              </div>

            </div>


            <div class="form-group m-form__group row">

          <label for="email" class="col-2 col-form-label">Email  :</label>

          <div class="col-10">

            <input type="email" id="email" class="form-control m-input" name="email"  value="{{ $user->email}}">

          </div>

        </div>


        <div class="form-group m-form__group row">

      <label for="phone" class="col-2 col-form-label">Phone  :</label>

      <div class="col-10">

        <input type="text" id="phone" class="form-control m-input" name="phone"  value="{{ $user->phone}}">

      </div>

    </div>



          <div class="form-group m-form__group row">

        <label for="password" class="col-2 col-form-label">password  :</label>

        <div class="col-10">

          <input type="password" id="password" class="form-control m-input" name="password"  value="" autocomplete="off">

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
