<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="font-weight: bold;">File Manager</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row m-3">
                <div class="col-lg-2">
                    <div class="position-relative">
                        <div class="card">
                            <div class="card-body" style="height: max-content;">
                                <nav class="navbar-mail">
                                    <ul class="navbar-nav flex-column w-100">
                                        <li class="d-grid mb-4 dropdown">
                                            <button class="btn btn-bd-primary mx-auto gap-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Create New
                                            </button>
                                            <ul class="dropdown-menu w-100">
                                                <li><a class="dropdown-item d-flex align-items-center" href="#!"><i class="me-2 icon-xs" data-feather="folder-plus"></i>Folder</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#!"><i class=" me-2 icon-xs " data-feather="file-plus"></i>Files</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#!"><i class=" me-2 icon-xs " data-feather="file"></i>Document</a></li>
                                                <li><a class="dropdown-item d-flex align-items-center" href="#!"><i class=" me-2 icon-xs " data-feather="upload"></i>Choose File</a></li>
                                            </ul>

                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i>
                                                My Files
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i>
                                                Google Drive
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i>
                                                Dropbox
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i>
                                                Shared with me
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i>
                                                Recent
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-folder"></i> Starred

                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-dark" aria-current="page" href="#!">
                                                <i class=" nav-icon far fa-folder"></i> Deleted Files
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <span class="badge badge-secondary-soft">Free</span>
                                            <div class=" mb-3">
                                                <span>Storage</span>
                                                <div class="progress mt-2" style="height: 6px;">
                                                    <div class="progress-bar bg-warning" role="progressbar" aria-label="Example 1px high" style="width: 54%; border-radius: 10px;" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <span>8.45 GB (56%) of 15 GB used</span>
                                        </li>
                                    </ul>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row" style="margin-bottom: 10px; margin-left: 2px">
                        <form action="#">
                            <div class="input-group ">
                                <span class="input-group-append" style="width: 200px; position:relative">
                                    <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search" >
                                    <button class="btn  ms-n10 rounded-0 rounded-end" type="button" style="position: absolute; right:0;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-dark">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                        </svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <a href="">
                                        <div class="d-flex align-items-center">
                                            <i class="nav-icon far fa-folder text-dark" style="font-size: 25px;"></i>
                                            <div class="ml-2">
                                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>