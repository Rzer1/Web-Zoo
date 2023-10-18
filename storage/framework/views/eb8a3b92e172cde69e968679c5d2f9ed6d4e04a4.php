

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <p class="text-center header"><?php echo e($animal->name); ?> - <?php echo e($animal->kind); ?></p>
        <div class="col-md-6">
            <img class="img-fluid" src="<?php echo e(asset('/storage'.$animal->img)); ?>">
        </div>
        <div class="col-md-6">
            <p class="text-center header">Описание</p>
            <p class="text"><?php echo e($animal->description); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/animal.blade.php ENDPATH**/ ?>