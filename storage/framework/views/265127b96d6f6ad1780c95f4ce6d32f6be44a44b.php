<!doctype html>
<html dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mohamed Safia</title>

        <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  
    </head>
    <body>
  
       <div class="container">
      <header class="blog-header py-3" style="background-color: #eee;margin-top: 15px;border-radius: 5px;padding: 10px;">
        <div class="row ">
       
          <div class="col-12 text-right">
            <h3><a class="blog-header-logo text-dark" href="#">محمد ابو صفية</a></h3>
          </div>
        
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex">
          <a class="p-2 text-muted" href="#">الرئيسية</a>
          <a class="p-2 text-muted" href="#">المنتجات</a>
        </nav>
      </div>

 


      <div class="row mb-2">

        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">

              <h3 class="mb-0"><a class="text-dark" href="#"><?php echo e($product->title); ?></a></h3>

              <h5 class="mb-0"><a class="text-dark" href="#">السعر : <?php echo e($product->price); ?> شيكل</a></h5>

              <div class="mb-1 text-muted"><?php echo e($product->created_at); ?></div>
              <p class="card-text mb-auto"><?php echo $product->description; ?></p>
              <a href="#" class="btn btn-primary">اشتري الان </a>
            </div>
       

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  


      </div>
    </div>
    </body>
</html>
