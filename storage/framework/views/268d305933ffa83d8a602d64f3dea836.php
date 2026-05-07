<?php
    $user = auth()->user();
?>

<div class="leftside-menu">

    <!-- Logo -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo.png')); ?>" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-sm.png')); ?>" alt="small logo">
        </span>
    </a>

    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-dark.png')); ?>" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-dark-sm.png')); ?>" alt="small logo">
        </span>
    </a>

    <!-- Sidebar -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>

        <!-- User -->
        <div class="leftbar-user flex flex-col items-center justify-center py-4">
            <a href="#" class="flex flex-col items-center">
                <img src="<?php echo e(asset('printingcell/public/assets/images/users/avatar-1.jpg')); ?>"
                     class="rounded-full shadow-sm border-2 border-gray-200 mb-2 mx-auto"
                     height="52" width="52">
                <span class="text-xs font-semibold">
                    <?php echo e($user->name ?? 'Guest'); ?>

                </span>
            </a>
        </div>

        <!-- Menu -->
        <ul class="side-nav">

            <li class="side-nav-title">Apps</li>

            
            <?php if($user?->is_admin == 1): ?>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#reportsMenu" class="side-nav-link">
                        <i class="uil-window"></i>
                        <span>Reports</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="reportsMenu">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="<?php echo e(route('reports.sales')); ?>">Sales Reports</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#salesMenu" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span>Sales</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="salesMenu">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="<?php echo e(route('invoicing.index')); ?>">Sale Invoice</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('drafts.index')); ?>">Draft Invoice</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('custommer.index')); ?>">Customer List</a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('premiertax.sale.buyer-summary')); ?>">Buyer Summary Report</a>
                            </li>
                        </ul>
                    </div>
                </li>

            
            <?php elseif($user?->is_admin == 3): ?>

                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#accountsMenu" class="side-nav-link">
                        <i class="uil-window"></i>
                        <span>Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="accountsMenu">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="<?php echo e(route('premiertax.companies.index')); ?>">Company</a>
                            </li>
                        </ul>
                    </div>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</div><?php /**PATH C:\Users\Shahan Developer\FBR\FBR\resources\views/components/sidebar.blade.php ENDPATH**/ ?>