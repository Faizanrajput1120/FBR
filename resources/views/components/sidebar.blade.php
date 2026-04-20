<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img src="{{ asset('printingcell/public/assets/images/logo.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('printingcell/public/assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="{{ asset('printingcell/public/assets/images/logo-dark.png') }}" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="{{ asset('printingcell/public/assets/images/logo-dark-sm.png') }}" alt="small logo">
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
                <img src="{{ asset('printingcell/public/assets/images/users/avatar-1.jpg') }}" alt="user-image"
                    height="52" width="52" class="rounded-full shadow-sm border-2 border-gray-200 mb-2 mx-auto">
                <span class="leftbar-user-name mt-1 text-center text-xs font-semibold">Premier Tax</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">



            <li class="side-nav-title">Apps</li>
            @if (auth()->user()->is_admin == 1)
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
                                <a href="{{ route('reports.sales') }}">Sales Reports</a>
                            </li>


                        </ul>
                    </div>
                </li>
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarEmails" aria-expanded="false"
                        aria-controls="sidebarEmails" class="side-nav-link">
                        <i class="uil-envelope"></i>
                        <span> Sales </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmails">
                        <ul class="side-nav-second-level">


                            <li>
                                <a href="{{ route('invoicing.index') }}">Sale Invoice</a>
                            </li>
                            <li>
                                <a href="{{ route('drafts.index') }}">Draft Invoice</a>
                            </li>
                        </ul>
                    </div>
                </li>
            @endif



            @if (auth()->user()->is_admin == 3)
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false"
                        aria-controls="sidebarLayouts" class="side-nav-link">
                        <i class="uil-window"></i>
                        <span> Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ route('premiertax.companies.index') }}">Company</a>
                            </li>
                            <li>
                                <a href="{{ route('users.index') }}">Users</a>
                            </li>

                        </ul>
                    </div>
                </li>
            @endif








        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
