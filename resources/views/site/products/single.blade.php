@include('site.header')
<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">{{$product->title}}</span>
<h2 class="entry-title">{{$product->title}}</h2>
</div>
</div>
</div>
</div>
</div>
<section id="product-collection" class="section">
<div class="container">
<div class="row">
@if( $product->image )
<div class="col-md-4 col-sm-6 col-xs-12">
<div class="product-details-image" >
  <img src="{{ $product->image() }}"/>
</div>
<button type="button" data-role="none" class="slick-next slick-arrow" aria-label="Next" role="button" style="display: block;">Next</button></ul>
</div>
@endif


<div class="col-md-8 col-sm-6 col-xs-12">
<div class="info-panel">
<h1 class="product-title">{{ $product->title }}</h1>

<div class="price-ratting">
<div class="price float-left">
  <h5 class="sub-title">price</h5>
{{ $product->price() }}
</div>

</div>

<div class="short-desc">
<h5 class="sub-title">Quick Overview</h5>
 {!! $product->description !!}
</div>

<div class="quantity-cart">
  <a href="{{ url('/cart/add/'.$product->id) }}">
<button class="btn btn-common"><i class="icon-basket-loaded-loaded"></i> add to cart</button>
  </a>
</div>



<div class="share-icons pull-right">
<span>share :</span>
<a href="{{ $setting->facebook }}"><i class="fa fa-facebook"></i></a>
<a href="{{ $setting->twitter }}"><i class="fa fa-twitter"></i></a>
<a href="{{ $setting->instagram }}"><i class="fa fa-instagram"></i></a>
<a href="{{ $setting->linkedIn }}"><i class="fa fa-linkedin"></i></a>
</div>
</div>
</div>
</div>
</div><br><br>
</section>
<br><br>
@include('site.footer')
