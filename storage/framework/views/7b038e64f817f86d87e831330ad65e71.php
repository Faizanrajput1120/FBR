<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('premiertax.sales.index')); ?>">Sale Invoices</a></li>
                        <li class="breadcrumb-item active">Buyer Summary Report</li>
                    </ol>
                </div>
                <h3 class="page-title">Buyer Summary Report</h3>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-12">
            <form method="GET" action="<?php echo e(route('premiertax.sale.buyer-summary')); ?>" class="row g-3">
                <div class="col-md-3">
                    <label for="buyer_name" class="form-label">Select Buyer</label>
                    <select class="form-control select2" id="buyer_name" name="buyer_name">
                        <option value="">-- Select Buyer --</option>
                        <?php $__currentLoopData = $buyers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buyer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($buyer); ?>" <?php echo e($selectedBuyer == $buyer ? 'selected' : ''); ?>>
                                <?php echo e($buyer); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="start_date" class="form-label">Start Date</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" value="<?php echo e($startDate ?? ''); ?>">
                </div>
                <div class="col-md-2">
                    <label for="end_date" class="form-label">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo e($endDate ?? ''); ?>">
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Generate Report</button>
                    <a href="<?php echo e(route('premiertax.sale.buyer-summary')); ?>" class="btn btn-secondary ms-2">Reset</a>
                </div>
            </form>
        </div>
    </div>

    <?php if($selectedBuyer && $rows->count() > 0): ?>
        <div class="row mb-2">
            <div class="col-md-12 text-end">
                <button onclick="printReport()" class="btn btn-success">
                    <i class="mdi mdi-printer"></i> Print Report
                </button>
            </div>
        </div>

        <div id="reportSection">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h4 class="mb-1"><?php echo e($user->business_name ?? $rows->first()['buyer_name'] ?? 'Company'); ?></h4>
                            <p class="mb-0"><strong>Sales Tax Registration:</strong> <?php echo e($user->cinc_ntn ?? 'N/A'); ?></p>
                        </div>
                        <div class="col-md-6 text-end">
                            <h5>Period</h5>
                            <p class="mb-0">
                                <?php echo e($startDate ? \Carbon\Carbon::parse($startDate)->format('d-M-Y') : 'Earliest'); ?>

                                -
                                <?php echo e($endDate ? \Carbon\Carbon::parse($endDate)->format('d-M-Y') : 'Latest'); ?>

                            </p>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-sm mb-0">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Date</th>
                                    <th>Bill Ref No</th>
                                    <th>FBR Invoice No</th>
                                    <th>Buyer Name</th>
                                    <th>Buyer NTN</th>
                                    <th>Item Name</th>
                                    <th>HS Code</th>
                                    <th class="text-end">Qty</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-end">Value Excl ST</th>
                                    <th class="text-end">ST %</th>
                                    <th class="text-end">Further ST</th>
                                    <th class="text-end">Sales Tax</th>
                                    <th class="text-end">Value Incl ST</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['invoice_date'] ? \Carbon\Carbon::parse($row['invoice_date'])->format('d-M-Y') : ''); ?></td>
                                    <td><?php echo e($row['invoice_ref_no'] ?? ''); ?></td>
                                    <td><?php echo e($row['fbr_invoice_no'] ?? ''); ?></td>
                                    <td><?php echo e($row['buyer_name'] ?? ''); ?></td>
                                    <td><?php echo e($row['buyer_ntn'] ?? ''); ?></td>
                                    <td><?php echo e($row['item_name']); ?></td>
                                    <td><?php echo e($row['hs_code']); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['quantity'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['unit_price'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['value_excl'], 2)); ?></td>
                                    <td class="text-end"><?php echo e($row['sales_tax_rate']); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['further_tax'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['sales_tax'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($row['value_incl'], 2)); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                            <tfoot>
                                <tr class="fw-bold table-active">
                                    <td colspan="7" class="text-end">Totals:</td>
                                    <td class="text-end"><?php echo e(number_format($totals['quantity'], 2)); ?></td>
                                    <td></td>
                                    <td class="text-end"><?php echo e(number_format($totals['valueExcl'], 2)); ?></td>
                                    <td></td>
                                    <td class="text-end"><?php echo e(number_format($totals['furtherTax'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($totals['salesTax'], 2)); ?></td>
                                    <td class="text-end"><?php echo e(number_format($totals['valueIncl'], 2)); ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3 mb-4">
            <div class="col-md-12 text-end">
                <button onclick="printReport()" class="btn btn-success">
                    <i class="mdi mdi-printer"></i> Print Report
                </button>
            </div>
        </div>
    <?php elseif($selectedBuyer): ?>
        <div class="alert alert-info">No records found for buyer: <strong><?php echo e($selectedBuyer); ?></strong></div>
    <?php endif; ?>
</div>

<style>
    @media print {
        body * { visibility: hidden; }
        #reportSection, #reportSection * { visibility: visible; }
        #reportSection { position: absolute; left: 0; top: 0; width: 100%; }
        .no-print, .btn, form, .page-title-box, .breadcrumb { display: none !important; }
        table { font-size: 10px !important; width: 100% !important; }
        .table-responsive { overflow: visible !important; }
    }
</style>

    <?php $__env->startPush('scripts'); ?>
<script>
    $(document).ready(function() {
        $('.select2').select2({ width: '100%', placeholder: '-- Select Buyer --', allowClear: true });
    });

    function printReport() {
        var printContents = document.getElementById('reportSection').innerHTML;
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Buyer Summary Report</title>');
        printWindow.document.write('<link href="<?php echo e(asset("assets/css/bootstrap.min.css")); ?>" rel="stylesheet">');
        printWindow.document.write('<style>');
        printWindow.document.write('body { font-family: Arial, sans-serif; padding: 20px; font-size: 10px; }');
        printWindow.document.write('table { width: 100%; border-collapse: collapse; font-size: 10px; }');
        printWindow.document.write('table, th, td { border: 1px solid #000; padding: 4px 6px; }');
        printWindow.document.write('th { background-color: #e9ecef; font-weight: bold; text-align: center; }');
        printWindow.document.write('.text-end { text-align: right; }');
        printWindow.document.write('.fw-bold { font-weight: bold; }');
        printWindow.document.write('.table-active td { background-color: #f0f0f0; }');
        printWindow.document.write('.card { border: none; padding: 0; }');
        printWindow.document.write('.card-body { padding: 0; }');
        printWindow.document.write('h4 { margin: 0 0 4px 0; font-size: 14px; }');
        printWindow.document.write('h5 { margin: 0 0 4px 0; font-size: 12px; }');
        printWindow.document.write('p { margin: 0; font-size: 10px; }');
        printWindow.document.write('.mb-3 { margin-bottom: 12px; }');
        printWindow.document.write('.mb-0 { margin-bottom: 0; }');
        printWindow.document.write('</style>');
        printWindow.document.write('</head><body>');
        printWindow.document.write(printContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.onload = function() { printWindow.print(); printWindow.close(); };
    }
</script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Shahan Developer\FBR\FBR\resources\views/SaleInvoice/buyer_summary.blade.php ENDPATH**/ ?>