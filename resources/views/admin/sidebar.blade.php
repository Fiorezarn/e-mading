        <!-- Main Sidebar Container -->
        <style>
            .nav-item:hover {
                background-color: #F3EEEA;
                border-radius: 10px;
            }

            .nav-item.active {
                background-color: #F3EEEA;
                border-radius: 10px;
            }

            .nav-link {
                color: #F3EEEA;
            }

            h3 {
                color: #F3EEEA;
            }

            .nav-item.active h3 {
                color: #B0A695 !important;
            }

            h3:hover {
                color: #B0A695 !important;
            }
        </style>
        <aside class="main-sidebar elevation-4" style="background-color: #B0A695;">
            <!-- Brand Logo -->
            <h1 class="brand-link text-center border-1 border-dark">Admin e-Mading</h1>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        </li>
                        <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
                            <a href="/admin" class="nav-link">
                                <h3>Dashboard</h3>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('posting') ? 'active' : '' }}">
                            <a href="/posting" class="nav-link">
                                <h3>Posting</h3>
                            </a>
                        </li>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
