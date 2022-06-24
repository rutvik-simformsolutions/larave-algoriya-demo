<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('') }}" class="brand-link">
        <img src=" {{ asset('theme/custom/img/logo.png') }} " alt="AdminLTE Logo" class="brand-image  elevation-1"
            style="opacity: .8">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src=" {{ asset('theme/dist/img/user2-160x160.jpg') }}   " class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item  ">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ (request()->is('')) ||  (request()->is('dashboard'))  ? 'active ' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas "></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item  ">
                    <a href="{{ route('search') }}"
                        class="nav-link {{ (request()->is('search')) ||  (request()->is('search'))  ? 'active ' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Search
                            <i class="right fas "></i>
                        </p>
                    </a>

                </li>
                <li class="nav-item {{ (request()->is('department')) ||  (request()->is('department/create'))  ? 'active menu-open ' : '' }}">
                    <a href="#" class="nav-link {{ (request()->is('department')) ||  (request()->is('department/create'))  ? 'active ' : '' }} ">
                        <i class="fas fa-plus"> </i>
                        <p>
                             Masters
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="">
                        <li class="nav-item">
                            <a href="{{ url('department') }}" class="nav-link {{ (request()->is('department')) ||  (request()->is('department/create'))  ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon "></i>
                                <p>Department</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('skill') }}" class="nav-link">
                                <i class="fas fa-hammer nav-icon"></i>
                                 <p>Skill</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/boxed.html" class="nav-link">
                              <i class="fas fa-broadcast-tower nav-icon"></i>
                                 <p>Status</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                                <i class="fas fa-lightbulb nav-icon"></i>
                                <p>Lead Source</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                                <i class="fas fa-address-card nav-icon"></i>
                                <p>Contact Type</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Employee
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                               <i class="fas fa-file-code nav-icon"></i>
                                <p>Developer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                               <i class="fas fa-user-check nav-icon"></i>
                                <p>BDM / QA </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-chart-line"></i>
                        <p>
                            Lead
                            <i class="fas fa-angle-left right"></i>

                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                               <i class="fas fa-microphone-alt nav-icon"></i>
                                <p>Active lead</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="fas fa-microphone-alt-slash nav-icon"></i>
                                <p> InActive lead </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i>
                        <p>
                            Client
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="pages/layout/top-nav.html" class="nav-link">
                                <i class="fas fa-check-double nav-icon"></i>
                                <p>Active Client</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                                <i class="fas fa-times nav-icon"></i>
                                <p>InActive Client</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
sc
