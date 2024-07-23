<div class="wrapper">
    <nav class="main-header navbar navbar-custom navbar-expand-lg navbar-light">
        <div class="container-fluid px-0 container-light" style="height: 40px;">
        </div>
    </nav>


    <aside class="main-sidebar sidebar-tertiary elevation-1" style="position: fixed;">

        <a href="index3.html" class="brand-link">
            <span class="brand-text ml-4 text-dark" style="font-weight: bold;">File Manager</span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-2 pb-3 d-flex">
                <div class="image">
                    <img src="<?= base_url() ?>img/fico.png" class="img-circle rounded-circle" alt="User Image" style="width: 50px; height:auto; align-items: center;">
                </div>
                <div class="info">
                    <p style="margin-top:24px; margin-left:8px">Fico Sibagariang</p>
                </div>
            </div>

            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" style="border-radius: 8px; margin-left: 4px;" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar" style="color: #f00;">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">
                            <i class="nav-icon fas fa-house-user" style="color: #f00;"></i>
                            <p style="color: #000;">
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/recent" class="nav-link">
                            <i class="nav-icon fas fa-folder" style="color: #f00;"></i>
                            <p style="color: #000;">
                                File Manager
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user" style="color: #f00;"></i>
                            <p style="color: #000;">
                                User
                                <i class="right fas fa-angle-left" style="color: #f00;"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/manajemen_user" class="nav-link">
                                    <i class="fas fa-solid fa-minus" style="color: #f00;"></i>
                                    <p style="color: #000;">Manajemen User</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/LogoutAkun" class="nav-link">
                            <i class="nav-icon fas fa-power-off" style="color: #f00;"></i>
                            <p style="color: #000;">
                                Log Out
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </aside>