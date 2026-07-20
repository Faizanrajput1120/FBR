<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <h4>Add Company</h4>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('premiertax.companies.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Company Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Save Company</button>
        <a href="<?php echo e(route('premiertax.companies.index')); ?>" class="btn btn-secondary">Back to List</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erplive/public_html/premiertax/resources/views/companies/create.blade.php ENDPATH**/ ?>