<?php $__env->startSection('title' , 'Sliders'); ?>

<?php $__env->startSection('content'); ?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">السلايدر</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo e(url('admin')); ?>" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">السلايدر</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto m--align-right">
                <a href="<?php echo e(url('')); ?>/admin/sliders/create" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    <span>
                        <i class="la la-cart-plus"></i>
                        <span>اضافة سلايدر جديد</span>
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
                                السلايدر
                            </h3>
                        </div>
                    </div>
                </div>

            </div>
            <div class="m-portlet__body">

                    <table class="table table-hover table-responsive" width="100%">
                        <thead class="thead-default">
                            <tr>
                                <th width="10">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" id="checkAll"><span></span></label>
                                </th>
                                <th style="width: 3%">الرقم</th>
                                <th>العنوان</th>
                                <th style="width: 40%"></th>

                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        <?php if( $sliders ): ?>
                            <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="<?php echo e($slider->title); ?>" name="sliders[<?php echo e($slider->id); ?>]" value="<?php echo e($slider->id); ?>"><span></span></label>
                                </th>
                                <th scope="row"><?php echo e($slider->id); ?></th>

                                <td><?php echo e($slider->title); ?></td>
                                <td>
                                    <a href="<?php echo e(url('')); ?>/admin/sliders/edit/<?php echo e($slider->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                    <a href="<?php echo e(url('')); ?>/admin/sliders/delete/<?php echo e($slider->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>

                                </td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout',['title' => 'السلايدر'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>