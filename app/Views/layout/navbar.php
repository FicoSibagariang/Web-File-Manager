<div class="wrapper">
    <nav class="main-header navbar navbar-custom navbar-expand-lg navbar-white navbar-light bg-body-tertiary">
        <div class="container-fluid px-0">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="profile profile-md profile-indicators profile-online">
                            <img src="<?= base_url() ?>img/fico.png" alt="User Avatar" class="img-size-40 mr-2 rounded-circle">
                            <div class="media-body">
                        <a href="#" class="dropdown-item">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="<?= base_url() ?>img/fico.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="<?= base_url() ?>img/fico.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <!-- nyoba -->
                <li class="nav-item dropdown">
                    <a class="nav-link rounded-circle" data-toggle="dropdown" href="#">
                        <div class="user user-panel user-indicator user-online">
                            <div class="image">
                                <img src="<?= base_url() ?>img/fico.png" class="img-circle" alt="User Image">
                            </div>
                        </div>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> Log Out
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>


    <aside class="main-sidebar sidebar-tertiary elevation-1" style="position: fixed;">

        <a href="index3.html" class="brand-link">
            <span class="brand-text fw-semibold ml-4 text-dark">File Manager</span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-2 pb-3 mb-3 d-flex">
                <div class="image">
                    <a href="#">
                        <img src="<?= base_url() ?>img/fico.png" class="img-circle" alt="User Image">
                    </a>
                </div>
                <div class="info">
                    <a href="#" class="d-block mt-2 mx-2 text-reset fw-semibold">Fico Sibagariang</a>
                </div>
            </div>

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

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="/" class="nav-link">
                            <i class="nav-icon fas fa-house-user"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/manage" class="nav-link">
                            <i class="nav-icon fas fa-folder"></i>
                            <p>
                                File Manager
                            </p>
                        </a>
                    </li>
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Profile
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/pages/project" class="nav-link ">
                                    <i class="fas fa-solid fa-minus"></i>
                                    <p>Project</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pages/files" class="nav-link">
                                    <i class="fas fa-solid fa-minus"></i>
                                    <p>Files</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/pages/activity" class="nav-link">
                                    <i class="fas fa-solid fa-minus"></i>
                                    <p>Activity</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/login" class="nav-link">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                Log Out
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/pages/settings" class="nav-link">
                            <i class="nav-icon fas fa-wrench"></i>
                            <p>
                                Settings
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>

        </div>

    </aside>