<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Hyper</a></li>
                            <li class="breadcrumb-item active">Sale Invoices</li>
                        </ol>
                    </div>
                    <h3 class="page-title">Sales Invoices</h3>
                </div>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible text-bg-success border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="row mb-3">
            <div class="col-md-8">
                <form method="GET" action="<?php echo e(route('premiertax.sales.index')); ?>" class="row g-3">
                    <div class="col-md-3">
                        <label for="start_date" class="form-label">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date"
                            value="<?php echo e(request('start_date')); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="end_date" class="form-label">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date"
                            value="<?php echo e(request('end_date')); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="bill_no" class="form-label">Bill No</label>
                        <select class="form-control select2" id="bill_no" name="bill_no">
                            <option value="">All Bill Numbers</option>
                            <?php $__currentLoopData = $availableBillNumbers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $billNo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($billNo); ?>" <?php echo e(request('bill_no') == $billNo ? 'selected' : ''); ?>>
                                    <?php echo e($billNo); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="client_name" class="form-label">Client</label>
                        <input type="text" class="form-control" id="client_name" name="client_name"
                            placeholder="Enter Client Name" value="<?php echo e(request('client_name')); ?>">
                    </div>
                    <div class="col-md-3">
                        <label for="item_name" class="form-label">Item</label>
                        <input type="text" class="form-control" id="item_name" name="item_name"
                            placeholder="Enter Item Description" value="<?php echo e(request('item_name')); ?>">
                    </div>

                    <div class="col-md-12 mt-3">
                        <button type="submit" class="btn btn-primary">Search</button>
                        <a href="<?php echo e(route('premiertax.sales.index')); ?>" class="btn btn-secondary">Reset</a>
                    </div>
                </form>
            </div>

        </div>

        <form action="<?php echo e(route('premiertax.sale.print-multiple')); ?>" method="POST" target="_blank" id="printMultipleForm">
            <?php echo csrf_field(); ?>
            <div class="row mb-2">
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="mdi mdi-printer"></i> Print Selected
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" id="selectAll" class="form-check-input">
                                    </th>
                                    <th>Bill No</th>
                                    <th>Client</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $salesInvoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="invoice_ids[]" value="<?php echo e($invoice->id); ?>"
                                                class="form-check-input invoice-checkbox">
                                        </td>
                                        <td><?php echo e($invoice->fbr_invoice_no); ?></td>
                                        <td><?php echo e($invoice->buyer_business_name ?? 'N/A'); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($invoice->invoice_date)->format('Y-m-d')); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('premiertax.sale.invoice', $invoice->id)); ?>"
                                                class="btn btn-primary btn-sm" target="_blank">
                                                <i class="mdi mdi-printer"></i> Print
                                            </a>



                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No sales invoices found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <?php $__env->startPush('scripts'); ?>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.select2').select2({
                    width: '100%',
                    placeholder: function () {
                        return $(this).data('placeholder') || "Select an option";
                    },
                    allowClear: true
                });

                // Select All / Deselect All
                $(document).on('change', '#selectAll', function () {
                    $('.invoice-checkbox').prop('checked', this.checked);
                });

                $(document).on('change', '.invoice-checkbox', function () {
                    if ($('.invoice-checkbox:checked').length === $('.invoice-checkbox').length) {
                        $('#selectAll').prop('checked', true);
                    } else {
                        $('#selectAll').prop('checked', false);
                    }
                });

                $('#printMultipleForm').submit(function (e) {
                    if ($('.invoice-checkbox:checked').length === 0) {
                        e.preventDefault();
                        alert('Please select at least one invoice to print.');
                    }
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\FBR\resources\views/SaleInvoice/index.blade.php ENDPATH**/ ?>