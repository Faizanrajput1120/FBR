<?php $__env->startSection('content'); ?>
<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-dark text-white d-flex justify-content-between">
            <h4 class="mb-0">Users List</h4>
            <a href="<?php echo e(route('users.create')); ?>" class="btn btn-light btn-sm">+ Add User</a>
        </div>

        <div class="card-body">

            <!-- FILTER FORM -->
            <form method="GET" action="<?php echo e(route('users.index')); ?>" class="row mb-4">

                <div class="col-md-4 mb-2">
                    <input type="text" name="search" class="form-control"
                           placeholder="Search by name or email"
                           value="<?php echo e(request('search')); ?>">
                </div>

                <div class="col-md-4 mb-2">
                    <select name="company_id" class="form-select">
                        <option value="">All Companies</option>
                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($comp->cid); ?>"
                                <?php echo e(request('company_id') == $comp->cid ? 'selected' : ''); ?>>
                                <?php echo e($comp->cname); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-4 d-flex mb-2">
                    <button type="submit" class="btn btn-primary me-2">Filter</button>
                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-secondary">Reset</a>
                </div>

            </form>

            <!-- SUCCESS MESSAGE -->
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>

            <!-- USERS TABLE -->
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Business</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($users->firstItem() + $key); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->email); ?></td>
                                <td><?php echo e($user->business_name ?? '-'); ?></td>

                                <!-- Show Company Name (not ID) -->
                                <td><?php echo e($user->company->name ?? '-'); ?></td>

                                <td>
                                    <a href="<?php echo e(route('users.edit', $user->id)); ?>"
                                       class="btn btn-sm btn-warning">Edit</a>

                                    <!-- Delete -->
                                    <form action="<?php echo e(route('users.destroy', $user->id)); ?>"
                                          method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Delete this user?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="6" class="text-center">No users found</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- PAGINATION -->
            <div class="mt-3">
                <?php echo e($users->withQueryString()->links()); ?>

            </div>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\resources\views/User/index.blade.php ENDPATH**/ ?>