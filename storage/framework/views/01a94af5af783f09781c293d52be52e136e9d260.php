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
        
            </div>
            <div class="m-portlet__body">                  

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