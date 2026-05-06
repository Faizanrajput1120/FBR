<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Party Member Details</h6>
            <div>
                <a href="<?php echo e(route('custommer.edit', $party->id)); ?>" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <a href="<?php echo e(route('custommer.index')); ?>" class="btn btn-secondary btn-sm">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="30%">ID</th>
                            <td><?php echo e($party->id); ?></td>
                        </tr>
                        <tr>
                            <th>Buyer Name</th>
                            <td><?php echo e($party->buyer_name); ?></td>
                        </tr>
                        <tr>
                            <th>Buyer Type</th>
                            <td>
                                <span class="badge <?php echo e($party->buyer_type == 'Registered' ? 'badge-success' : 'badge-warning'); ?>">
                                    <?php echo e($party->buyer_type); ?>

                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>CNIC</th>
                            <td><?php echo e($party->cnic ?? 'N/A'); ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th width="30%">Location</th>
                            <td>
                                <?php echo e($party->city ?? ''); ?><br>
                                <?php echo e($party->province ?? ''); ?><br>
                                <?php echo e($party->address ?? ''); ?>

                            </td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>
                                <?php if($party->NTN): ?>
                                    <i class="fas fa-phone"></i> <?php echo e($party->NTN); ?><br>
                                <?php endif; ?>
                                <?php if($party->strn): ?>
                                    <i class="fas fa-envelope"></i> <?php echo e($party->strn); ?>

                                <?php endif; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Company</th>
                            <td><?php echo e($party->company->name ?? 'N/A'); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\FBR\resources\views/customer/show.blade.php ENDPATH**/ ?>