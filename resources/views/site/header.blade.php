<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.uideck.com/items/shopr-theme/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 09:40:40 GMT -->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Ecommerce">
  <title>ShopR</title>

  <link rel="shortcut icon" href="{{ url('/assets') }}/img/favicon.png">

<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj" crossorigin="anonymous">
<!-- compiled and minified theme CSS -->
<link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
  integrity="sha384-YNPmfeOM29goUYCxqyaDVPToebWWQrHk0e3QYEs7Ovg6r5hSRKr73uQ69DkzT1LH" crossorigin="anonymous">
  
  <link rel="stylesheet" href="{{ url('/assets') }}/css/bootstrap-select.min.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/fonts/font-awesome.min.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/fonts/line-icons/line-icons.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/css/main.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/settings.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/animate.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="{{ url('/assets') }}/extras/owl.theme.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/ion.rangeSlider.css" type="text/css">
  <link rel="stylesheet" href="{{ url('/assets') }}/extras/ion.rangeSlider.skinFlat.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/component.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/slick.css" type="text/css">
  <link rel="stylesheet" href="{{ url('/assets') }}/extras/slick-theme.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/extras/nivo-lightbox.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/css/color-switcher.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/css/slicknav.css" type="text/css">

  <link rel="stylesheet" href="{{ url('/assets') }}/css/responsive.css" type="text/css">

  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">

  
  <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
    integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>

</head>

<body>

  <div class="header">

    <div class="top-bar">
      <div class="container">
        <div class="row">


          <div class="col-md-12">
            <div class="search-area">
              <form action="{{ url('') }}/search" method="get">
                <div class="control-group">
                  <input class="search-field" name="s" value="{{ request('s') }}" placeholder="Search here...">
                  <a class="search-button" href="{{ url('') }}/search"><i class="icon-magnifier"></i></a>
                </div>
              </form>
            </div>

            <div class="shop-cart">
              <ul>

                <li><a href="{{ url('/cart') }}" class="cart-icon cart-btn"><i class="icon-basket-loaded"></i>
                    @if( $eee > 0 ) <span class="cart-label">{{ $eee }}</span>
                    @endif</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-default" data-spy="affix" data-offset-top="50">
      <div class="container">
        <div class="row">
          <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
              <img src="{{ url('/assets') }}/img/logo.png" alt="">
            </a>
          </div>
          <div class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
              <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
              @foreach(\App\Category::all() as $category)
              <li><a href="{{ url('category/'. $category->link ) }}">{{ $category->title_ar }}</a></li>
              @endforeach
              @foreach(\App\Page::all() as $page)
              <li><a href="{{ url('/page/'.$page->link) }}">{{ $page->title_ar }}</a></li>
              @endforeach
            </ul>
            <div class="icon-right pull-right">
              <div class="text-right">

                @if( auth()->check() )
                <div class="account link-inline">
                  <div class="dropdown text-right">
                    <a href="#" aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="icon-user"></span> Account <span class="icon-arrow-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/profile') }}"><span class="icon icon-user"></span>My Account</a></li>
                      <li><a href="{{ url('/myorder') }}"><span class="icon icon-handbag"></span>My Orderes</a></li>

                      @if( auth()->user()->is_admin )
                      <li><a href="{{ url('/admin') }}" target="_blank"><span class="icon icon-user"></span>Control
                          Pannel</a></li>
                      @endif
                      <li><a href="{{ url('/logout') }}"><span class="icon icon-close"></span>Logout</a></li>
                    </ul>
                  </div>
                </div>
                @else
                <div class="account link-inline">
                  <a href="{{ url('/login') }}">Login</a>
                </div>
                <div class="account link-inline">
                  <a href="{{ url('/register') }}">Register</a>
                </div>
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>