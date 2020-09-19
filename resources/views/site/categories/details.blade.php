@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">{{ $category->title }}</span>
<h2 class="entry-title">{{ $category->title }}</h2>
</div>
</div>
</div>
</div>
</div>

<section class="about section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        @foreach( $category->products as $product )
        <div class="col-md-3 col-sm-6 col-xs-12">
          @include('site.products.item', ['product' => $product])
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>

@include('site.footer')
