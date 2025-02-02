<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <i class="fas fa-tachometer-alt"></i><span class="brand-text font-weight-light ml-3">Admin's Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth::user()->image)
                <img src="{{ asset('images/profile/' . Auth::user()->image ) }}" class="img-circle elevation-2"
                alt="User Image">
                @else
                <img src="{{ asset('dist/img/default-user.jpg') }}" class="img-circle elevation-2"
                alt="User Image">
                @endif
            </div>
            <div class="info">
            <a href="{{ url('admin/user/profile') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="{{ url('admin/category') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            All Category
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/post') }}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            All Tours
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/user') }}" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                        <p>
                            All Users
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/comments') }}" class="nav-link">
                    <i class="nav-icon fa fa-comments"></i>
                        <p>
                           Reviews
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/bookings') }}">
                    <i class="nav-icon fa fa-book"></i>
                        <p>
                            All bookings
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>