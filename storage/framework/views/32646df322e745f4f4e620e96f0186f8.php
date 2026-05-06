<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inventory</a></li>
                            <li class="breadcrumb-item active">Register Item</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Register Item</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h4 class="header-title">Add New Item</h4>
                            <a href="<?php echo e(route('inventory.itemmaster.list')); ?>" class="btn btn-secondary">
                                <i class="mdi mdi-arrow-left"></i> Back to List
                            </a>
                        </div>

                        <div class="tab-content mt-2">
                            <div class="tab-pane show active" id="input-types-preview">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form action="<?php echo e(route('inventory.itemmaster')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="item_code" class="form-label">Item Title <span class="text-danger">*</span></label>
                                                        <input type="text" id="item_code" class="form-control" name="item_code"
                                                            value="<?php echo e(old('item_code')); ?>" placeholder="Enter Item Title" required>
                                                        <?php if($errors->has('item_code')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('item_code')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="hs_code" class="form-label">HS Code <span class="text-danger">*</span></label>
                                                        <select name="hs_code" id="hs_code" class="form-select select2" required>
                                                            <option value="">Select HS Code</option>
                                                            <?php $__currentLoopData = $headings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($heading->subcategories && count($heading->subcategories)): ?>
                                                                    <optgroup label="<?php echo e($heading->code); ?> - <?php echo e($heading->description); ?>">
                                                                        <?php $__currentLoopData = $heading->subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($sub->code); ?>" <?php echo e(old('hs_code') == $sub->code ? 'selected' : ''); ?>>
                                                                                <?php echo e($sub->code); ?> - <?php echo e($sub->description); ?>

                                                                            </option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    </optgroup>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('hs_code')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('hs_code')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="unit" class="form-label">Unit <span class="text-danger">*</span></label>
                                                        <select name="unit" id="unit" class="form-control select2" required>
                                                            <option value="">Select Unit</option>
                                                            <?php $__currentLoopData = $units; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unitItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($unitItem->unit_value); ?>"
                                                                    <?php echo e(old('unit') == $unitItem->unit_value ? 'selected' : ''); ?>>
                                                                    <?php echo e($unitItem->unit_value); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('unit')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('unit')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="unit_value" class="form-label">Unit Value <span class="text-danger">*</span></label>
                                                        <input type="number" id="unit_value" class="form-control" name="unit_value"
                                                            value="<?php echo e(old('unit_value')); ?>" placeholder="Enter Unit Value" required step="any">
                                                        <?php if($errors->has('unit_value')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('unit_value')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="gramage" class="form-label">Gramage <span class="text-danger">*</span></label>
                                                        <input type="number" id="gramage" class="form-control" name="gramage"
                                                            value="<?php echo e(old('gramage')); ?>" placeholder="Enter Gramage" required step="any">
                                                        <?php if($errors->has('gramage')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('gramage')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="sale_type" class="form-label">Sale Type <span class="text-danger">*</span></label>
                                                        <select name="sale_type" id="sale_type" class="form-control select2" required>
                                                            <option value="">Select Sale Type</option>
                                                            <?php $__currentLoopData = $saleType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option value="<?php echo e($type); ?>"
                                                                    <?php echo e(old('sale_type') == $type ? 'selected' : ''); ?>>
                                                                    <?php echo e($type); ?>

                                                                </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <?php if($errors->has('sale_type')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('sale_type')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="sale" class="form-label">Sale Tax % <span class="text-danger">*</span></label>
                                                        <input type="number" id="sale" class="form-control" name="sale"
                                                            value="<?php echo e(old('sale')); ?>" placeholder="Enter Sale Tax %" required step="any">
                                                        <?php if($errors->has('sale')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('sale')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="purchase" class="form-label">Purchase Rate <span class="text-danger">*</span></label>
                                                        <input type="number" id="purchase" class="form-control" name="purchase"
                                                            value="<?php echo e(old('purchase')); ?>" placeholder="Enter Purchase Rate" required step="any">
                                                        <?php if($errors->has('purchase')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('purchase')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="mb-3">
                                                        <label for="sale_rate" class="form-label">Sale Rate <span class="text-danger">*</span></label>
                                                        <input type="number" id="sale_rate" class="form-control" name="sale_rate"
                                                            value="<?php echo e(old('sale_rate')); ?>" placeholder="Enter Sale Rate" required step="any">
                                                        <?php if($errors->has('sale_rate')): ?>
                                                            <span class="text-danger"><?php echo e($errors->first('sale_rate')); ?></span>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="mdi mdi-content-save"></i> Save Item
                                                </button>
                                                <a href="<?php echo e(route('inventory.itemmaster.list')); ?>" class="btn btn-light">
                                                    Cancel
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $__env->startPush('scripts'); ?>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#hs_code').select2({
                placeholder: 'Select or search HS Code',
                width: '100%'
            });
            $('#unit').select2({
                placeholder: 'Select Unit',
                width: '100%'
            });
            $('#sale_type').select2({
                placeholder: 'Select Sale Type',
                width: '100%'
            });
        });
    </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\FBR\resources\views/inventory/create_item_master.blade.php ENDPATH**/ ?>