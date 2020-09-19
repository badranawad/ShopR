@extends('admin.layout',['title' => 'Orders'])


@section('title' , 'Orders')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Orders</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Orders</span>
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
                                Orders
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">

                    <table class="table table-hover table-responsive" width="100%" style="text-align:center;">
                        <thead class="thead-default" >
                            <tr>
                                <th width="10" style="text-align:center;">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" id="checkAll"><span></span></label>
                                </th>
                                <th  style="text-align:center;">Num</th>
                                <th style="text-align:center;">  customer Name</th>
                                <th style="text-align:center;"> status </th>
                                <th style="text-align:center;"> Email</th>
                                <th style="text-align:center;"> Country</th>
                                <th style="text-align:center;"> City</th>
                                <th style="text-align:center;"> Address</th>
                                <th style="text-align:center;"> Phone</th>
                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        @if( $orders )
                            @foreach( $orders as $order )
                            <tr>
                                <th scope="row">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="{{ $order->name }}" name="orders[{{ $order->id }}]" value="{{ $order->id }}"><span></span></label>
                                </th>
                                <th scope="row" style="text-align:center;">{{ $order->id }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{!! $order->status() !!}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->country }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->city }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>
                                  <a href="{{ url('') }}/admin/orders/show/{{ $order->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-eye"></i></a>

                                    <a href="{{ url('') }}/admin/orders/delete/{{ $order->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>

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
