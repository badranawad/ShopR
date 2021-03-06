<?php $__env->startSection('title' , 'Sections'); ?>

<?php $__env->startSection('content'); ?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">

    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">الأقسام</h3>
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo e(url('admin')); ?>" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">الأقسام</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto m--align-right">
                <a href="<?php echo e(url('')); ?>/admin/sections/create" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    <span>
                        <i class="la la-cart-plus"></i>
                        <span>اضافة قسم جديد</span>
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
                                الأقسام
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
                                <th>اسم القسم</th>
                                <th style="width: 40%"></th>
                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        <?php if( $sections ): ?>
                            <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="<?php echo e($section->title); ?>" name="sections[<?php echo e($section->id); ?>]" value="<?php echo e($section->id); ?>"><span></span></label>
                                </th>
                                <th scope="row"><?php echo e($section->id); ?></th>

                                <td><?php echo e($section->name); ?></td>
                                <td>
                                    <a href="<?php echo e(url('')); ?>/admin/sections/edit/<?php echo e($section->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                    <a href="<?php echo e(url('')); ?>/admin/sections/delete/<?php echo e($section->id); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>

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

<?php echo $__env->make('admin.layout',['title' => 'الأقسام'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>