@extends('admin.layout',['title' => 'Users'])


@section('title' , 'Users')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper" >

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Users</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Users</span>
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
                              Users
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">

                    <table class="table table-hover table-responsive" width="100%" style="text-align:center;">
                        <thead class="thead-default">
                            <tr>
                                <th width="10">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" id="checkAll"><span></span></label>
                                </th>
                                <th style="text-align:center;">Num</th>


                                <th style="text-align:center;">customer Name </th>

                                <th style="text-align:center;">Email</th>
                                <th style="text-align:center;">Phone</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        @if( $users )
                            @foreach( $users as $user )
                            <tr>
                                <th scope="row">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="{{ $user->name }}" name="users[{{ $user->id }}]" value="{{ $user->id }}"><span></span></label>
                                </th>
                                <th scope="row" style="text-align:center;">{{ $user->id }}</th>

                                <td>{{ $user->name }}</td>

                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>

                                <td>
                                    <a href="{{ url('') }}/admin/users/edit/{{ $user->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                    <a href="{{ url('') }}/admin/users/delete/{{ $user->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>

                                </td>

                            </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>

            </div>

        </div>

    </div>

</div>

@endsection
