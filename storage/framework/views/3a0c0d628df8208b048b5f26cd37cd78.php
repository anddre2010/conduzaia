<?php if (! ($breadcrumbs->isEmpty())): ?>
    <nav aria-label="You are here:" role="navigation">
        <ul class="breadcrumbs">
            <?php $__currentLoopData = $breadcrumbs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breadcrumb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if($loop->last): ?>
                    <li class="current"><span class="show-for-sr">Current:</span> <?php echo e($breadcrumb->title); ?></li>
                <?php elseif($breadcrumb->url): ?>
                    <li><a href="<?php echo e($breadcrumb->url); ?>"><?php echo e($breadcrumb->title); ?></a></li>
                <?php else: ?>
                    <li class="disabled"><?php echo e($breadcrumb->title); ?></li>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </nav>
<?php endif; ?>
<?php /**PATH /home/metronic/8/v8.2.9/laravel/starterkit/vendor/diglactic/laravel-breadcrumbs/resources/views/foundation6.blade.php ENDPATH**/ ?>