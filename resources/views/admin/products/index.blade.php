@extends('admin.layout',['title' => 'Products'])


@section('title' , 'Products')

@section('content')
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">Products</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="{{ url('admin') }}" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">Products</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto m--align-right">
                <a href="{{ url('') }}/admin/products/create" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    <span>
                        <i class="la la-cart-plus"></i>
                        <span>Add a new product</span>
                    </span>
                </a>
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
                            <span class="m-portlet__head-icon">
                                <i class="m-menu__link-icon flaticon-cart"></i>
                            </span>
                            <h3 class="m-portlet__head-text">
                                products
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">

                    <table class="table table-hover table-responsive" width="100%" style="text-align:center;">
                        <thead class="thead-default">
                            <tr>
                                <th width="10" style="text-align:center;">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" id="checkAll"><span></span></label>
                                </th>
                                <th style="text-align:center;">Num</th>


                                <th style="text-align:center;">product Name</th>
                                <th width="100" style="text-align:center;">price</th>
                                <th style="text-align:center;">status</th>
                                <th style="width: 10%" style="text-align:center;"></th>
                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        @if( $products )
                            @foreach( $products as $product )
                            <tr>
                                <th scope="row" >
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="{{ $product->title }}" name="products[{{ $product->id }}]" value="{{ $product->id }}"><span></span></label>
                                </th>
                                <th scope="row" style="text-align:center;">{{ $product->id }}</th>

                                <td>{{ $product->title }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{!! $product->status == 1 ? '<span class="m-badge m-badge--success m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-success">Active</span>' : '<span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">InActive</span>' !!}</td>
                                <td>
                                    <a href="{{ url('') }}/admin/products/edit/{{ $product->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                    <a href="{{ url('') }}/admin/products/delete/{{ $product->id }}" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>

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
