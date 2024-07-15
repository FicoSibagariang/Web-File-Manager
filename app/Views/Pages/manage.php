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
                                            <button class="btn btn-bd-primary mx-auto dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                                            <a class="nav-link                                                                     text-dark text-muted" aria-current="page" href="#">
                                                <i class="nav-icon icon-link-hover far fa-folder"></i>
                                                My Files
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class="nav-icon fab fa-google-drive"></i>
                                                Google Drive
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class="nav-icon fab fa-dropbox"></i>
                                                Dropbox
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class="nav-icon fas fa-share"></i>
                                                Shared with me
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-clock"></i>
                                                Recent
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class="nav-icon far fa-star"></i>
                                                Starred
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                                                <i class=" nav-icon fas fa-trash"></i>
                                                Deleted Files
                                            </a>
                                        </li>
                                        <br><br><br><br><br><br><br><br><br><br>
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
                                    <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search">
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

                    <div class="mt-4 mb-6">
                        <h5 class="mb-3" style="font-weight: bold;">Quick Access</h5>
                        <div class="row ">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="">
                                            <div class="d-flex align-items-center">
                                                <i class="nav-icon far fa-file-word text-dark" style="font-size: 25px;"></i>
                                                <div class="ml-2">
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Word</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                                                <i class="nav-icon far fa-file-pdf text-dark" style="font-size: 25px;"></i>
                                                <div class="ml-2">
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PDF</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                                                <i class="nav-icon far fa-file-powerpoint text-dark" style="font-size: 25px;"></i>
                                                <div class="ml-2">
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PowerPoint</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                                                <i class="nav-icon far fa-file-excel text-dark" style="font-size: 25px;"></i>
                                                <div class="ml-2">
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Excel</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                                                <i class="nav-icon far fa-image text-dark" style="font-size: 25px;"></i>
                                                <div class="ml-2">
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Image</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                                                    <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Figma Design</h5>
                                                    <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-1">
                        <h5 class="mb-3 mt-4" style="font-weight: bold;">Folder</h5>
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
                    <div class="row">
                        <div class="col">
                            <div class="card mb-4 mt-5">
                                <div class="card-header">
                                    <h4 class="mb-0" style="font-weight: bold;">Recent Files</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive table-card">
                                        <table class="table mb-0 text-nowrap table-centered">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Last Modified</th>
                                                    <th>Size</th>
                                                    <th>Owner</th>
                                                    <th>Members</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>Webapp Design & Development</td>
                                                    <td>Jan 03, 2023, 7:14 PM</td>
                                                    <td>128 MB</td>
                                                    <td>Anna Hunter</td>
                                                    <td><img src="../assets/images/avatar/avatar-11.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-2.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-3.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Dashui-figma-design.zip</td>
                                                    <td>Feb 13, 2023, 7:14 PM</td>
                                                    <td>521 MB</td>
                                                    <td>Michael Singh</td>
                                                    <td><img src="../assets/images/avatar/avatar-4.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-5.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-6.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Dahsui-Annual-Report.pdf</td>
                                                    <td>Dec 18, 2023, 7:14 PM</td>
                                                    <td>7.2 MB</td>
                                                    <td>Aaron Leverett</td>
                                                    <td><img src="../assets/images/avatar/avatar-7.jpg" class="avatar avatar-xs rounded-circle" alt="">

                                                        <img src="../assets/images/avatar/avatar-8.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Framer template</td>
                                                    <td>Nov 25, 2023, 7:14 PM</td>
                                                    <td>54.2 MB</td>
                                                    <td>Martin Hurtado</td>
                                                    <td><img src="../assets/images/avatar/avatar-9.jpg" class="avatar avatar-xs rounded-circle" alt="">

                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td>Documentation.docs</td>
                                                    <td>Feb 9, 2023, 7:14 PM</td>
                                                    <td>8.3 MB</td>
                                                    <td>Frank Conroy</td>
                                                    <td><img src="../assets/images/avatar/avatar-10.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-9.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                        <img src="../assets/images/avatar/avatar-5.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>

                                                    <td class="border-bottom-0">Dashui Sale Report.exl</td>
                                                    <td class="border-bottom-0">Feb 9, 2023, 7:14 PM</td>
                                                    <td class="border-bottom-0">31 MB</td>
                                                    <td class="border-bottom-0">Edna Knipp</td>
                                                    <td class="border-bottom-0"><img src="../assets/images/avatar/avatar-6.jpg" class="avatar avatar-xs rounded-circle" alt="">

                                                        <img src="../assets/images/avatar/avatar-7.jpg" class="avatar avatar-xs rounded-circle" alt="">
                                                    </td>
                                                    <td class="border-bottom-0">
                                                        <div class="dropdown">
                                                            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i data-feather="more-vertical" class="icon-xs"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item d-flex align-items-center" href="#!">Something else
                                                                        here</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>



                                            </tbody>
                                        </table>

                                    </div>
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