<?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <a href="<?php echo e(route('user-management.roles.show', $role)); ?>" class="badge fs-7 m-1 <?php echo e(app(\App\Actions\GetThemeType::class)->handle('badge-light-?', $role->name)); ?>">
        <?php echo e($role->name); ?>

    </a>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/metronic/8/v8.2.9/laravel/starterkit/resources/views/pages/apps/user-management/permissions/columns/_assign-to.blade.php ENDPATH**/ ?>