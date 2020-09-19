<div class="shop-product">
  <div class="product-box">
    <a href="#"><img src="{{ $product->image() }}" alt="" height="310px" ></a>
    <div class="cart-overlay"></div>
    @if($product->isNew())
      <span class="sticker new"><strong>NEW</strong></span>
    @endif
    <div class="actions">
      <div class="add-to-links">
        <a href="{{ url('/cart/add/'.$product->id) }}" class="btn-cart"><i class="icon-basket-loaded"></i></a>
      </div>
    </div>
  </div>
  <div class="product-info">
    <h4 class="product-title"><a href="{{ $product->url() }}">{{ $product->title }}</a></h4>
    <div class="align-items">
      <div class="pull-left">
        <span class="price">{{ $product->price() }}</span>
      </div>
      <div class="pull-right">

      </div>
    </div>
  </div>
</div>
