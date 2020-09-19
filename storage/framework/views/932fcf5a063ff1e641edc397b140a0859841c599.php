<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8" />
    <title>لوحة التحكم </title>
    <meta name="description" content="Latest updates and statistic charts"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,600,700,900" rel="stylesheet">
    <!--begin::Base Styles -->  
    <!--begin::Page Vendors --> 
    <link href="<?php echo e(url('/')); ?>/assets/admin/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/css.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(url('/')); ?>/assets/admin/css-rtl.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(url('/assets/ehab-jasser')); ?>/images/favicon-16x16.png">
  <?php echo $__env->yieldContent('head'); ?>
</head>

<!-- end::Head -->
<!-- end::Body -->

<body class="m-page--fluid m--skin- m-content--skin-light2 m-aside-left--skin-light m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">



    <!-- begin:: Page -->

  <div class="m-grid m-grid--hor m-grid--root m-page">





    <!-- BEGIN: Header -->

    <header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >

      <div class="m-container m-container--fluid m-container--full-height">

        <div class="m-stack m-stack--ver m-stack--desktop">   

          <!-- BEGIN: Brand -->

          <div class="m-stack__item m-brand  m-brand--skin-light ">

            <div class="m-stack m-stack--ver m-stack--general">

              <div class="m-stack__item m-stack__item--middle m-brand__logo">

                <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="m-brand__logo-wrapper">

                <img alt="" src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" style="width: 65px" />

                </a>  
              </div>

              <div class="m-stack__item m-stack__item--middle m-brand__tools">

                        

                <!-- BEGIN: Left Aside Minimize Toggle -->

                <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block 

                   ">

                  <span></span>

                </a>

                <!-- END -->

              

                      <!-- BEGIN: Responsive Aside Left Menu Toggler -->

                <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">

                  <span></span>

                </a>

                <!-- END -->

              

                    



                      <!-- BEGIN: Responsive Header Menu Toggler -->

                <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">

                  <span></span>

                </a>

                <!-- END -->

                      



                <!-- BEGIN: Topbar Toggler -->

                <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">

                  <i class="flaticon-more"></i>

                </a>

                <!-- BEGIN: Topbar Toggler -->

              </div>

            </div>

          </div>

          <!-- END: Brand --> 



          <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">


            <!-- BEGIN: Topbar -->

            <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">

              <div class="m-stack__item m-topbar__nav-wrapper">

                 <ul class="m-topbar__nav m-nav m-nav--inline">






                  <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">

                    <a href="#" class="m-nav__link m-dropdown__toggle">

                    <span class="m-topbar__userpic">

                    <img src ="" class="m--img-rounded m--marginless m--img-centered" alt=""/>

                    </span>

                    <span class="m-topbar__username m--hide">Mohamed Safia</span>          

                    </a>



                    <div class="m-dropdown__wrapper">

                        <div class="m-dropdown__inner">

                          <div class="m-dropdown__header m--align-center" style="background: #2c2e3e">

                            <div class="m-card-user m-card-user--skin-light">

                              <div class="m-card-user__pic">

                                <img src="./assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="">

                              </div>

                              <div class="m-card-user__details">

                                <span class="m-card-user__name m--font-weight-500">Mohamed Safia</span>


                              </div>

                            </div>

                          </div>

                          <div class="m-dropdown__body">

                            <div class="m-dropdown__content">

                              <ul class="m-nav m-nav--skin-light">

                                <li class="m-nav__section m--hide">

                                  <span class="m-nav__section-text">الاقسام</span>

                                </li>


                                <li class="m-nav__separator m-nav__separator--fit"></li>

                                <li class="m-nav__item">

                                  <a href="" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">تسجيل الخروج</a>

                                </li>

                              </ul>

                            </div>

                          </div>

                        </div>

                      </div>





                  </li>





                </ul>

              </div>

            </div>

            <!-- END: Topbar -->

          </div>





        </div>

      </div>

    </header>

    <!-- END: Header -->  



    <!-- begin::Body -->

    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

                  

      <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



      <div class="m-grid__item m-grid__item--fluid m-wrapper">



          <?php if($errors->any()): ?>         

          <div class="m-subheader ">

            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">

              <div class="m-alert__text">

                  <ul>

                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                          <li><?php echo e($error); ?></li>

                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  </ul>

              </div>           

            </div>

          </div>



          <?php endif; ?>



          <?php if( session('success') ): ?>

          <div class="m-subheader ">

            <div class="m-alert m-alert--outline alert alert-success alert-dismissible fade show" role="alert">

              <div class="m-alert__text">

                  <?php echo e(session('success')); ?>


              </div>           

            </div>

          </div>



          <?php endif; ?>



          <?php if( session('error') ): ?>

          <div class="m-subheader ">

            <div class="m-alert m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">

              <div class="m-alert__text">

                  <?php echo e(session('error')); ?>


              </div>           

            </div>

          </div>

          <?php endif; ?>





          <?php echo $__env->yieldContent('content'); ?>



      </div>



    </div>



            


    <!-- end::Footer -->    

        



  </div>

  <!-- end:: Page -->



                

    <!-- begin::Scroll Top -->

  <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">

    <i class="la la-arrow-up"></i>

  </div>

  <!-- end::Scroll Top -->        





  <!--begin::Base Scripts -->        

  <script src="<?php echo e(url('/')); ?>/assets/admin/vendors/base/vendors.bundle.js" type="text/javascript"></script>

  <script src="<?php echo e(url('/')); ?>/assets/admin/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

  <!--end::Base Scripts -->   



  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>





  <?php echo $__env->yieldContent('footer'); ?>



  <script type="text/javascript">

      $(document).on('click','.deleteForm',function () {
          var href = $(this).attr('href');
          swal({
              title: "تأكيد الحذف ",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "حذف",
              cancelButtonText: "الغاء",
              closeOnConfirm: false
          },function(){

              // form.submit();
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>'
                  },
                  type: 'post', // or post?
                  url: href , // change as needed
                  data: { '_method':'DELETE'  } , // if you are posting
                  success: function(json) {
                      location.reload();
                  },
                  error: function(xhr, textStatus, thrownError) {
                      alert(xhr.status);
                      alert(thrownError);
                  }
              });

          });


          return false;

      });


  </script>

        

</body>

</html>