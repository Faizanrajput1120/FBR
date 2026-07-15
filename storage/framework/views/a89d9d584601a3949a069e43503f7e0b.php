<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark">
            <h4 class="mb-0">Edit User</h4>
        </div>

        <div class="card-body">

            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form action="<?php echo e(route('users.update', $user->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control"
                               value="<?php echo e(old('name', $user->name)); ?>" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control"
                               value="<?php echo e(old('email', $user->email)); ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Password (leave blank if not changing)</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Business Name</label>
                        <input type="text" name="business_name" class="form-control"
                               value="<?php echo e(old('business_name', $user->business_name)); ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Province</label>
                        <input type="text" name="province" class="form-control"
                               value="<?php echo e(old('province', $user->province)); ?>">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <textarea name="address" class="form-control" rows="3"><?php echo e(old('address', $user->address)); ?></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">CINC NTN</label>
                        <input type="text" name="cinc_ntn" class="form-control"
                               value="<?php echo e(old('cinc_ntn', $user->cinc_ntn)); ?>">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Company</label>
                        <select name="company_id" class="form-select">
                            <option value="">Select Company</option>
                            <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($comp->cid); ?>"
                                    <?php echo e($user->c_id == $comp->cid ? 'selected' : ''); ?>>
                                    <?php echo e($comp->cname); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">FBR Access Token</label>
                    <input type="text" name="fbr_access_token" class="form-control"
                           value="<?php echo e(old('fbr_access_token', $user->fbr_access_token)); ?>">
                </div>

                <div class="form-check mb-2">
                    <input class="form-check-input" type="checkbox" name="is_admin" value="1"
                           <?php echo e($user->is_admin ? 'checked' : ''); ?>>
                    <label class="form-check-label">Is Admin</label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="use_sandbox" value="1"
                           <?php echo e($user->use_sandbox ? 'checked' : ''); ?>>
                    <label class="form-check-label">Use Sandbox</label>
                </div>

                <button type="submit" class="btn btn-warning w-100">
                    Update User
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html><?php /**PATH C:\Users\PC\FBR\FBR\resources\views/User/edit.blade.php ENDPATH**/ ?>