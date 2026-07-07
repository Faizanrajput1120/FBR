<?php $__env->startSection('content'); ?>
<div class="container-fluid">
     
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Customer Management</h6>
            <div>
                <a href="<?php echo e(route('custommer.create')); ?>" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Add New Customer
                </a>
            </div>
        </div>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php if(session('error')): ?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo e(session('error')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>
        <div class="card-body">
            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>

            <!-- Search Form -->
            <div class="mb-4">
                <form action="<?php echo e(route('custommer.index')); ?>" method="GET" class="form-inline">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Search by name..." 
                               value="<?php echo e(request('search')); ?>">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>ID</th>
                            <th>Buyer Name</th>
                            <th>Type</th>
                            <th>CNIC</th>
                            <th>STRN</th>
                            <th>NTN</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $parties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $party): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($party->id); ?></td>
                            <td><?php echo e($party->buyer_name); ?></td>
                            <td>
                                <span class="badge <?php echo e($party->buyer_type == 'Registered' ? 'badge-success' : 'badge-warning'); ?>">
                                    <?php echo e($party->buyer_type); ?>

                                </span>
                            </td>
                            <td><?php echo e($party->cnic ?? 'N/A'); ?></td>
                            <td>
                                <?php if($party->strn): ?>
                                   <?php echo e($party->strn); ?>

                                <?php endif; ?>
                               
                            </td>
                            <td>
                                <?php if($party->NTN): ?>
                                   <?php echo e($party->NTN); ?>

                                <?php endif; ?>
                               
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="<?php echo e(route('custommer.show', $party->id)); ?>" class="btn btn-info" title="View">
                                        <i class="fas fa-eye">View</i>
                                    </a>
                                    <a href="<?php echo e(route('custommer.edit', $party->id)); ?>" class="btn btn-warning" title="Edit">
                                        <i class="fas fa-edit">EDIT</i>
                                    </a>
                                    <form action="<?php echo e(route('custommer.destroy', $party->id)); ?>" method="POST" class="d-inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this party?')">
                                            <i class="fas fa-trash">Delete</i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="6" class="text-center">No parties found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-between">
                <div class="mt-3">
                    Showing <?php echo e($parties->firstItem()); ?> to <?php echo e($parties->lastItem()); ?> of <?php echo e($parties->total()); ?> entries
                </div>
                <div class="mt-3">
                    <?php echo e($parties->appends(request()->query())->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<!-- Page level plugins -->
<script src="<?php echo e(asset('vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $('#dataTable').DataTable({
            "paging": false, // Disable DataTables pagination (using Laravel pagination)
            "info": false,
            "searching": false // Disable DataTables search (using our custom search)
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\resources\views/customer/index.blade.php ENDPATH**/ ?>