@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> MyOrder</span>
<h2 class="entry-title">MyOrder</h2>
</div>
</div>
</div>
</div>
</div>
<br><br>
<div class="row">
<div class="col-md-12 col-sm-12 col-sx-12">
<div class="order-details">
<div class="order_review margin-bottom-35">
<table class="table table-responsive table-review-order">
<thead>
@if ($orders->count()!=0)
<h2 class="text-center"><i class="icon-basket-loaded-loaded"></i>MY Order</h2>
<br>
  <tr>
  <th class="text-center">Product</th>
  <th class="text-center">Price</th>
  <th class="text-center">qty</th>
  <th class="text-center">Total</th>
  <th class="text-center">Purchase Time</th>
  <th class="text-center">status</th>

  </tr>

@endif
</thead>
<tbody>
  @forelse( $orders as $order )
          @foreach($order->orderProduct as $OrderProduct)

        <tr>
        <td class="text-center"><p class="price"> {{$OrderProduct->product_name}}</p></td>
        <td class="text-center"><p class="price">{{$OrderProduct->price()}}</p></td>
        <td class="text-center"><p class="price">{{$OrderProduct->qty}}</p></td>
        <td class="text-center"><p class="price">{{$OrderProduct->total()}}</p></td>
        <td class="text-center"><p class="price">{{$OrderProduct->created_at}}</p></td>
        <td class="text-center"><p class="price">{{ $order->status()}}</p></td>

        </tr>
        @endforeach
@empty
<br><br><br>
<div class="empty-cart text-center" style="margin:50px 0;">
    <h2>There are no Orders.</h2>
    <br><br>
</div>

@endforelse
<br>

</tbody>
<tfoot>
</tfoot>
</table>
<br>
<br>
<br>
<br><br>
<br>


</div>
</div>
</div>
</div>

<br><br>
<br>
<br>
<br>
<br>


@include('site.footer')
