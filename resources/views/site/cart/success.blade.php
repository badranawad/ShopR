@include('site.header')






<div class="page-header">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb">
<a href="{{ url('/') }}"><i class="icon-home"></i> Home</a>
<span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
<span class="current"> Shopping cart</span>
<h2 class="entry-title"> Shopping cart </h2>
</div>
</div>
</div>
</div>
</div>

<div class="empty-cart text-center" style="margin:50px 0;">

					<h2>Your request has been successfully added</h2><br>
					<h3>The request status message will be received as soon as possible</h3>
					<br>
					<br>
					<a href="{{ url('/') }}" class="btn btn-primary" style="width: 200px;    margin-bottom: 100px;">Continue shopping</a>

					<br>



				</div>








@include('site.footer')
