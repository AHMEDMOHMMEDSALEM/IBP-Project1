<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <ahref="https://visualpharm.com/assets/187/Admin-595b40b65ba036ed117d075e.svg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
            <a href="{#}" class="d-block">{{ optional(Auth::user())->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <url class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/standard_users/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Control board</p>
                    </a>
                </li>
                <!-- Students -->
                <li class="nav-item">
                    <a href="{{ route('standard.students') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Products</p>
                    </a>
                </li>
                <!-- Announcements -->
                <li class="nav-item">
                <a href="{{ route('standard.announcements') }}" class="nav-link">
                    <i class="nav-icon fas fa-bullhorn"></i>
                    <p>Discount</p>
                </a>
                </li>
                <!-- Messages -->
                <li class="nav-item">
                <a href="{{ route('standard.messages.create') }}" class="nav-link">
                    <i class="nav-icon fas fa-envelope"></i>
                    <p>Send Message</p>
                </a>
                </li>
                </url>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
