<?php if($paginator->hasPages()): ?>
<div class="m-datatable m-datatable--default m-datatable--loaded">
  <div class="m-datatable__pager m-datatable--paging-loaded clearfix">
    <ul class="m-datatable__pager-nav">
        
        <?php if($paginator->onFirstPage()): ?>
            <li><a class="m-datatable__pager-link m-datatable__pager-link--prev m-datatable__pager-link--disabled"><i class="la la-angle-double-right"></i></a></li>
        <?php else: ?>
            <li><a class="m-datatable__pager-link m-datatable__pager-link--prev" href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev"><i class="la la-angle-double-right"></i></a></li>
        <?php endif; ?>

        
        <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <?php if(is_string($element)): ?>
                <li><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--disabled"><?php echo e($element); ?></a></li>
            <?php endif; ?>

            
            <?php if(is_array($element)): ?>
                <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($page == $paginator->currentPage()): ?>
                        <li class="active"><a class="m-datatable__pager-link m-datatable__pager-link-number m-datatable__pager-link--active"><?php echo e($page); ?></a></li>
                    <?php else: ?>
                        <li><a class="m-datatable__pager-link m-datatable__pager-link-number" href="<?php echo e($url); ?>"><?php echo e($page); ?></a></li>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
        <?php if($paginator->hasMorePages()): ?>
            <li><a class="m-datatable__pager-link m-datatable__pager-link--next" href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next"><i class="la la-angle-double-left"></i></a></li>
        <?php else: ?>
            <li><a class="m-datatable__pager-link m-datatable__pager-link--next m-datatable__pager-link--disabled"><i class="la la-angle-double-left"></i></a></li>
        <?php endif; ?>
    </ul>
  </div>
</div>
<?php endif; ?>
