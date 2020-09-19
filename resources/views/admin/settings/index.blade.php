@extends('admin.layout',['title' => 'Settings'])


@section('title' , 'Settings')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Settings</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
    <!-- END: Subheader -->

    <div class="m-content">


        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="row align-items-center">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Settings
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">
              <form method="post" action="{{ url('') }}/admin/settings/update">
                {{ csrf_field() }}

                    <table class="table table-hover table-responsive" width="100%">
                        <thead class="thead-default">
                        <tr>
                              <tr>
                                 <th> Web site Name   :</th>
                                 <th><input type="text" class="form-control" name="title" value="{{$setting->title}}"></th>
                              </tr>
                              <tr>
                                <th> Facebook Link   :</th>
                                <th><input type="text" class="form-control" name="facebook" value="{{$setting->facebook}}"></th>

                              </tr>
                              <tr>
                                <th> Twitter Link    :</th>
                                <th><input type="text" class="form-control" name="twitter" value="{{$setting->twitter}}"></th>

                              </tr>
                              <tr>
                                <th> Instagram Link  :</th>
                                <th><input type="text" class="form-control" name="instagram" value="{{$setting->instagram}}"></th>

                              </tr>
                              <tr>
                                <th> LinkedIn Link   :</th>
                                <th><input type="text" class="form-control" name="linkedIn" value="{{$setting->linkedIn}}"></th>

                              </tr>
                              <tr>
                                <th style="width: 20%"></th>
                                <th></th>

                              </tr>
                            </tr>

                      </thead>
                      <table class="table-total-checkout">
                        <button  type="submit" class="btn btn-primary btn-sm" style="float : right" >Save  </button>

                      </table>
                    </table>
</form>
            </div>

        </div>

    </div>

</div>

@endsection
