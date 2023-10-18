<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <h2 class="header text-center">Виртуальный зоопарк</h2>
        <?php $__currentLoopData = $animals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $elem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-auto">
                <div class="card background" style="width: 18rem;">
                    <div class="card-header">
                        <img class="img-fluid" src="<?php echo e(asset('/storage'.$elem->img)); ?>"><br>
                        <p class="text-center"><?php echo e($elem->name); ?></p>
                    </div>
                    <div class="card-body">
                        <p>Вид: <?php echo e($elem->kind); ?></p>
                        <p>Возраст: <?php echo e($elem->age); ?></p>
                        <p class="text-start"><a class="button" href="/public/animal/<?php echo e($elem->id); ?>">Перейти</a></p>
                        <?php if(auth()->guard()->check()): ?>
                        <p class="text-end"><a class="button" href="/public/deleteanimal/<?php echo e($elem->id); ?>">Удалить</a></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php if(auth()->guard()->check()): ?>
        <h2 class="header text-center">Добавьте своё животное!</h2>
        <form method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="exampleInputKind" class="form-label">Вид</label>
                <input type="text" class="form-control" id="exampleInputKind" name="exampleInputKind" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Имя</label>
                <input type="text" class="form-control" id="exampleInputName" name="exampleInputName" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputAge" class="form-label">Возраст</label>
                <input type="text" class="form-control" id="exampleInputAge" name="exampleInputAge" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputDescription" class="form-label">Описание</label>
                <textarea class="form-control" id="exampleInputDescription" name="exampleInputDescription" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputImg" class="form-label">Картинка</label>
                <input type="file" class="form-control" id="exampleInputImg" name="exampleInputImg">
            </div>
            <button type="submit" class="btn btn-primary" name="addanimal">Добавить</button>
        </form>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\localhost\resources\views/home.blade.php ENDPATH**/ ?>