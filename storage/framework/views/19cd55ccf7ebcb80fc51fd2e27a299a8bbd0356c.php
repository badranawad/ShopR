<?php $__env->startSection('title' , 'Products'); ?>

<?php $__env->startSection('content'); ?>
<div class="m-grid__item m-grid__item--fluid m-wrapper">
                    
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">

        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">المنتجات</h3>            
                <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                    <li class="m-nav__item m-nav__item--home">
                        <a href="<?php echo e(route('admin.dashboard.index')); ?>" class="m-nav__link m-nav__link--icon">
                           <i class="m-nav__link-icon la la-home"></i>
                        </a>
                    </li>
                    <li class="m-nav__separator">-</li>
                    <li class="m-nav__item">
                        <a href="" class="m-nav__link">
                            <span class="m-nav__link-text">المنتجات</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="ml-auto m--align-right">
                <a href="<?php echo e(route('admin.products.create')); ?>" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
                    <span>
                        <i class="la la-cart-plus"></i>
                        <span>اضافة منتج جديد</span>
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
                                المنتجات
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="m-portlet__head-tools">




                    <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <a href="#" class="switch-filters m-portlet__nav-link m-portlet__nav-link--icon"><i class="fa fa-filter"></i></a>  
                        </li>
                    </ul>

                </div>

            </div>
            <div class="m-portlet__body">


                <div class="collapse show" id="switch-filters" style="<?php echo e($filters_open == 1 ? '' :'display:none;'); ?>; background: rgba(32, 30, 31, 0.0392156862745098);padding: 15px;margin-bottom: 15px;border-radius: 4px;">

                    <form class="form-group m-form__group row align-items-center m--margin-bottom-30">
                         <div class="col-md-2">
                            <div class="m-form__group m-form__group--inline">
                                <div class="m-form__label">
                                    <label>رقم المنتج :</label>
                                </div>
                                <div class="m-form__control">
                                    <div class="">
                                        <input type="text" name="product_id" value="<?php echo e(request('product_id')); ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none m--margin-bottom-10"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="m-form__group m-form__group--inline">
                                <div class="m-form__label">
                                    <label>الاسم :</label>
                                </div>
                                <div class="m-form__control">
                                    <div class="">
                                        <input type="text" name="name" value="<?php echo e(request('name')); ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none m--margin-bottom-10"></div>
                        </div>


                        <div class="col-md-2">
                            <div class="m-form__group m-form__group--inline">
                                <div class="m-form__label">
                                    <label>السعر :</label>
                                </div>
                                <div class="m-form__control">
                                    <div class="">
                                        <input type="text" name="price" value="<?php echo e(request('price')); ?>" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="d-md-none m--margin-bottom-10"></div>
                        </div>

                        

                        <div class="col-md-2 m--margin-top-320">
                            <div class="m-form__group m-form__group--inline">
                                <div class="m-form__label">
                                    <label class="m-label m-label--single">الحالة :</label>
                                </div>
                                <div class="m-form__control">
                                    <select class="form-control m-bootstrap-select m-bootstrap-select--solid m_form_type" name="is_active">
                                        <option value="">الكل</option>
                                        <option value="1" <?php echo e(request('is_active') == 1 ? 'selected' : ''); ?>>مفعل</option>
                                        <option value="2" <?php echo e(request('is_active') == 2 ? 'selected' : ''); ?>>غير مفعل</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-2">
                                <div class="m-form__label">
                                    <label class="m-label m-label--single" style="color: #fff;">.</label>
                                </div>
                            <button type="submit" class="btn btn-warning " style="width: 100%;">إظهار النتائج</button>
                        </div>

                        <hr>
                    </form>

                </div>

                <form action="<?php echo e(route('admin.products.bulk')); ?>" method="post" id="bulk-action-form">
                    <?php echo e(csrf_field()); ?>


                    <div class="row m--margin-bottom-20">

                        <div class="col-12">
                            <div class="m-demo__preview m-demo__preview--badge m--margin-bottom-20">
                                <a href="<?php echo e(route('admin.products.index')); ?>"><span class="m-badge m-<?php echo e(!request('is_active') ? 'badge':'metal'); ?>--brand m-badge--wide">الكل (<?php echo e($activeProductsCount + $disActiveProductsCount); ?>)</span></a>
                                <a href="<?php echo e(route('admin.products.index')); ?>/?is_active=1"><span class="m-badge m-<?php echo e(request('is_active') == '1' ? 'badge':'metal'); ?>--brand m-badge--wide">مفعلة (<?php echo e($activeProductsCount); ?>)</span></a>
                                <a href="<?php echo e(route('admin.products.index')); ?>/?is_active=2"><span class="m-badge m-<?php echo e(request('is_active') == '2' ? 'badge':'metal'); ?>--brand m-badge--wide">غير مفعلة (<?php echo e($disActiveProductsCount); ?>)</span></a>
                            </div>

                        </div>

                        <div class="col-6">


                            <div class="m-form__group m-form__group--inline" style="width: 150px;display: inline-block;">
                                <div class="m-form__control">
                                    <select class="form-control m-bootstrap-select m-bootstrap-select--solid m_form_type" name="bulk_action" id="bulk-action">
                                        <option value="0">تنفيذ الامر</option>
                                        <option value="delete">حذف المحدد</option>
                                       
                                    </select>
                                </div>
                            </div>
                            <button type="submit" name="bulk" value="1" class="btn btn-warning edit-products">تنفيذ</button>
                        </div>

                        <div class="col-6">
                            <div class="m-datatable__pager-info" style="text-align: left;margin-top: 10px;">
                                <?php echo e($products->total()); ?> منتج
                            </div>
                        </div>

                    </div>

                  

                    <table class="table table-hover table-responsive" width="100%">
                        <thead class="thead-default">
                            <tr>
                                <th width="10">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" id="checkAll"><span></span></label>
                                </th>
                                <th style="width: 3%">الرقم</th>
                               
                            
                                <th>اسم المنتج</th>
                               
                                <th width="100">سعر المنتج</th>
                                <th>الحالة</th>
                                <th style="width: 10%"></th>
                            </tr>
                        </thead>
                        <tbody class="m-datatable__body" style="">
                        <?php if( $products ): ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <th scope="row">
                                    <label class="m-checkbox m-checkbox--brand"><input type="checkbox" data-name="<?php echo e($product->title); ?>" name="products[<?php echo e($product->id); ?>]" value="<?php echo e($product->id); ?>"><span></span></label>
                                </th>
                                <th scope="row"><?php echo e($product->id); ?></th>
                               
                                <td><?php echo e($product->title); ?></td>
                                
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo $product->status == 1 ? '<span class="m-badge m-badge--success m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-success">مفعل</span>' : '<span class="m-badge m-badge--danger m-badge--dot"></span>&nbsp;<span class="m--font-bold m--font-danger">غير مفعل</span>'; ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.products.edit' , [ 'id' => $product->id ] )); ?>" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill"><i class="la la-edit"></i></a>
                                    <a href="<?php echo e(route('admin.products.destroy' , [ 'id' => $product->id ] )); ?>" class="deleteForm m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details"><i class="la la-trash"></i></a>
                                   
                                </td>
                               
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
                        <div class="m-datatable__pager-nav">
                            <?php echo e($products->appends(request()->input())->links('admin.paginate')); ?>     
                        </div>
                        <div class="m-datatable__pager-info pull-left" style="margin-top: -26px;">
                            عرض <?php echo e($products->firstItem()); ?> - <?php echo e($products->lastItem()); ?> من مجموع <?php echo e($products->total()); ?> منتج
                        </div>

                    </div>

                </form>

            </div>

        </div>   

    </div>
            
</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('footer'); ?>
<script type="text/javascript">
$(".switch-filters").click(function(){
    $("#switch-filters").slideToggle();
    return false;
});

$('.edit-products').click(function(){
    if( $('.m-datatable__body input[type="checkbox"]:checked').length > 0 && $("#bulk-action").val() == 'edit' ){
        $(".show-products-multi-edit-form").slideDown();
        
        $('.edit-multi-products-list').html('');
        $('.m-datatable__body input[type="checkbox"]:checked').each(function(){
            var id = $(this).val();
            var title = $(this).attr('data-name');
            $('.edit-multi-products-list').append(`<li class="m-nav__item">
                    <i class="m-nav__link-icon flaticon-cancel remove-from-multi-edit"></i>
                    <span class="m-nav__link-text">`+title+`</span>
                    <input type="hidden" name="selected_products[]" value="`+id+`" />
                </li>`);


        });

    }else if( $('.m-datatable__body input[type="checkbox"]:checked').length > 0 && $("#bulk-action").val() == 'delete' ){
        swal({
            title: "تأكيد الحذف ",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "حذف",
            cancelButtonText: "الغاء",
            closeOnConfirm: false
        },function(){
            $("#bulk-action-form").submit();
        });
        return false;
    }
    return false;
});



$("#checkAll").click(function(){
    $('input:checkbox').not(this).prop('checked', this.checked);
});

$('.cancel-edit-products').click(function(){
    $('.edit-multi-products-list').html('');
    $(".show-products-multi-edit-form").slideUp();
});

$("body").on('click','.remove-from-multi-edit',function(){
    $(this).parent().remove();
    return false;
});


    $('.m_form_type').selectpicker({
        noneSelectedText:'-- بلا تعديل --'
    });



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout',['title' => 'المنتجات'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>