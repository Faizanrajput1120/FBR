<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h4>Companies</h4>
            <a href="<?php echo e(route('premiertax.companies.create')); ?>" class="btn btn-primary">Add Company</a>
        </div>
    </div>

    <?php if(session('success')): ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    <?php endif; ?>

    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>Id</th>
                <th>Company Name</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($company->cid); ?></td>
                <td><?php echo e($company->cname); ?></td>
                <td class="no-print">
                    <form action="<?php echo e(route('premiertax.companies.destroy', $company->cid)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this company?');" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <button type="button" class="btn btn-secondary mt-3" onclick="printTable()">Print Table</button>
</div>

<script>
    function printTable() {
        const elementsToHide = document.querySelectorAll('.no-print');
        elementsToHide.forEach(el => el.style.display = 'none');

        const printContents = document.getElementById('basic-datatable').outerHTML;
        const originalContents = document.body.innerHTML;

        document.body.innerHTML = `
            <html>
                <head>
                    <title>Print Table</title>
                    <style>
                        table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        th, td {
                            border: 1px solid #ddd;
                            padding: 8px;
                        }
                        th {
                            background-color: #f2f2f2;
                            text-align: left;
                        }
                        .no-print {
                            display: none;
                        }
                    </style>
                </head>
                <body>
                    ${printContents}
                </body>
            </html>
        `;

        window.print();
        document.body.innerHTML = originalContents;
        window.location.reload();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/erplive/public_html/premiertax/resources/views/companies/index.blade.php ENDPATH**/ ?>