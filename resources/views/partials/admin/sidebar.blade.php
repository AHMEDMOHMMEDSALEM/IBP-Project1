<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info" style="font-family: 'Courier New', Courier, monospace; font-size:20px ;font-style:oblique">
            <a href="#" class="d-block">{{ optional(Auth::user())->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <url class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item">
                    <a href="{{ url('/dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>CONTROL BOARD</p>
                    </a>
                </li>
                <!-- Users -->
                <li class="nav-item">
                    <a href="{{ url('/users') }}" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>EMPLOYEES</p>
                    </a>
                </li>
                <!-- Students -->
                <li class="nav-item">
                    <a href="{{ url('/students') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>PRODUCTS</p>
                    </a>
                </li>
                <!-- Announcements -->
                <li class="nav-item">
                    <a href="{{url('/announcements') }}" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>DISCOUNTS</p>
                    </a>
                </li>
                <!-- Messages -->
                <li class="nav-item">
                    <a href="{{ url('/messages') }}" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>MESSAGES</p>
                    </a>
                </li>
                </url>
        </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
