@include('site.header')

<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current">search</span>
<h2 class="entry-title">search</h2>
</div>
</div>
</div>
</div>
</div>

<section class="about section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        @forelse( $result as $product )
        <div class="col-md-3 col-sm-6 col-xs-12">
          @include('site.products.item', ['product' => $product])
        </div>
        @empty
        <div class="empty-cart text-center" style="margin:50px 0;">
            <h2>There are no products with this name</h2>
            <br><br>
        </div>
        @endforelse


      </div>
    </div>
  </div>
</section>

@include('site.footer')
