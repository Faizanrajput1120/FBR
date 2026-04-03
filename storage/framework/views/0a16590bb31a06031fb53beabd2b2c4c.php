<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo.png')); ?>" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-sm.png')); ?>" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-dark.png')); ?>" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="<?php echo e(asset('printingcell/public/assets/images/logo-dark-sm.png')); ?>" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user flex flex-col items-center justify-center py-4">
            <a href="pages-profile.html" class="flex flex-col items-center">
                <img src="<?php echo e(asset('printingcell/public/assets/images/users/avatar-1.jpg')); ?>" alt="user-image"
                    height="52" width="52" class="rounded-full shadow-sm border-2 border-gray-200 mb-2 mx-auto">
                <span class="leftbar-user-name mt-1 text-center text-xs font-semibold">Premier Tax</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">



            <li class="side-nav-title">Apps</li>


            <!--<li class="side-nav-item">-->
            <!--    <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts"-->
            <!--        class="side-nav-link">-->
            <!--        <i class="uil-window"></i>-->
            <!--        <span> Accounts</span>-->
            <!--        <span class="menu-arrow"></span>-->
            <!--    </a>-->
            <!--    <div class="collapse" id="sidebarLayouts">-->
            <!--        <ul class="side-nav-second-level">-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('level1.list')); ?>">Level1</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('level2.list')); ?>">Level2</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('amaster.list')); ?>">Chart Of Account</a>-->
            <!--            </li>-->

            <!--            <li>-->
            <!--                <a href="<?php echo e(route('cash.reports')); ?>">Cash Receipt</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('cheque_receipts.reports')); ?>">Cheque Receipts</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('payment.reports')); ?>">Cash Payment</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('bank_recipt.reports')); ?>">Bank Receipt</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('bank_payment.reports')); ?>">Bank Payment</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('ledger.list')); ?>">Ledger</a>-->
            <!--            </li>-->
                         
                        

            <!--            <li>-->
            <!--                <a href="<?php echo e(route('payables.list')); ?>">Payables</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('recieveables.list')); ?>">Recieveable</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('journal_voucher.reports')); ?>">Journal Voucher</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('open_bal.reports')); ?>">Opening Balance</a>-->
            <!--            </li>-->
            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            
            
            <!--<li class="side-nav-item">-->
            <!--    <a data-bs-toggle="collapse" href="#sidebarEmails2" aria-expanded="false" aria-controls="sidebarEmails2"-->
            <!--        class="side-nav-link">-->
            <!--        <i class="uil-envelope"></i>-->
            <!--        <span> Reports </span>-->
            <!--        <span class="menu-arrow"></span>-->
            <!--    </a>-->
            <!--    <div class="collapse" id="sidebarEmails2">-->
            <!--        <ul class="side-nav-second-level">-->
            <!--             <li>-->
            <!--                <a href="<?php echo e(route('bank_cash.reports')); ?>">Bank/Cash Receipt Report</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('expense.reports')); ?>">Expense Report</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('purchase.reports')); ?>">Purchase Reports</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('sale.reports')); ?>">Sale Reports</a>-->
            <!--            </li>-->
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('daily_statement.reports')); ?>">Daily Statement</a>-->
            <!--            </li>-->
                       
            <!--            <li>-->
            <!--                <a href="<?php echo e(route('report.stock')); ?>">Stock Reports</a>-->
            <!--            </li>-->

            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
            
           
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarRegistrationForm22s" aria-expanded="false"
                    aria-controls="sidebarRegistrationForm22s" class="side-nav-link">
                    <i class="uil-window"></i>
                    <span>Reports</span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarRegistrationForm22s">
                    <ul class="side-nav-second-level">
                      
                        <li>
                            <a href="<?php echo e(route('reports.sales')); ?>">Sales Reports</a>
                        </li>

                        
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmails" aria-expanded="false" aria-controls="sidebarEmails"
                    class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Sales </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmails">
                    <ul class="side-nav-second-level">
                     
                        
                       <li>
                            <a href="<?php echo e(route('invoicing.index')); ?>">Sale Invoice</a>
                        </li>
  <li>
                            <a href="<?php echo e(route('drafts.index')); ?>">Draft Invoice</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--<li class="side-nav-item">-->
            <!--    <a data-bs-toggle="collapse" href="#sidebarEmails1" aria-expanded="false" aria-controls="sidebarEmails1"-->
            <!--        class="side-nav-link">-->
            <!--        <i class="uil-envelope"></i>-->
            <!--        <span> Billing </span>-->
            <!--        <span class="menu-arrow"></span>-->
            <!--    </a>-->
            <!--    <div class="collapse" id="sidebarEmails1">-->
            <!--        <ul class="side-nav-second-level">-->
                     
            <!--           <li>-->
            <!--                <a href="<?php echo e(route('general_billing.report')); ?>">General Billing</a>-->
            <!--            </li>-->

            <!--        </ul>-->
            <!--    </div>-->
            <!--</li>-->
           
          
            
            

            

           

            
           
            
            
           

<!--<li class="side-nav-item">-->
<!--                <a data-bs-toggle="collapse" href="#sidebarRegistrationForm2" aria-expanded="false"-->
<!--                    aria-controls="sidebarRegistrationForm2" class="side-nav-link">-->
<!--                    <i class="uil-window"></i>-->
<!--                    <span>Set-Up Department</span>-->
<!--                    <span class="menu-arrow"></span>-->
<!--                </a>-->
<!--                <div class="collapse" id="sidebarRegistrationForm2">-->
<!--                    <ul class="side-nav-second-level">-->
                      
<!--                        <li>-->
<!--                            <a href="<?php echo e(route('print.index')); ?>">Department</a>-->
<!--                        </li>-->
                        
<!--                         <li>-->
<!--                            <a href="<?php echo e(route('process.index')); ?>">Level2</a>-->
<!--                        </li>-->
                        
<!--                    </ul>-->
<!--                </div>-->
<!--            </li>-->

            
            
        
            
            
         


            <!--<li class="side-nav-item">-->
            <!--    <a href="<?php echo e(route('premiertax.companies.index')); ?>" class="side-nav-link">-->
            <!--        <i class="uil-rss"></i>-->
            <!--        <span> Company </span>-->
            <!--    </a>-->
                
            <!--</li>-->

    


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div><?php /**PATH /home/erplive/public_html/premiertax/resources/views/components/sidebar.blade.php ENDPATH**/ ?>