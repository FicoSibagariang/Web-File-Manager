<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="content-wrapper">
    <!-- Page content -->
    <div id="app-content container">
        <!-- Container fluid -->

        <div class="app-content-area">
            <div class="container-fluid mt-n22">
                <div class="bg-primary pt-10 pb-21 mt-n6 mx-n4"></div>
                <div class="row" style="padding: 10px;">
                    <div class="col-lg-12 col-md-10 col-12">
                        <!-- Page header -->
                        <div class="d-flex justify-content-between align-items-center mb-0 mt-3">
                            <div class="mb-lg-0">
                                <h3 class="mb-0 text-dark my-2" style="font-weight: bold;">Dashboard</h3>
                            </div>
                            <div>
                                <a href="#!" class="btn btn-info">Create New Project</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding: 10px;">
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <a href="/pages/project">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0 text-dark" style="font-size: 20px; font-weight:bold">Projects</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i class="fas fa-suitcase fa-2x text-dark"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="mb-1 text-dark" style="font-weight: bold;">18</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2 mr-2">2</span>
                                        Completed
                                    </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <a href="">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0 text-dark" style="font-size: 20px; font-weight:bold">Activity</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i class="fas fa-list fa-2x text-dark"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="mb-1 text-dark" style="font-weight: bold;">132</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2 mr-2">28</span>
                                        Completed
                                    </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
                        <!-- card -->
                        <div class="card h-100 card-lift">
                            <!-- card body -->
                            <div class="card-body">
                                <a href="">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0 text-dark" style="font-size: 20px; font-weight:bold">Teams</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-primary-soft text-primary rounded-2">
                                        <i class="fas fa-user fa-2x text-dark"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div class="lh-1">
                                    <h1 class="mb-1 text-dark" style="font-weight: bold;">12</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2 mr-2">1</span>
                                        Completed
                                    </p>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row  -->
                <div class="row" style="padding: 10px;">
                    <div class="col-xxl-10 col-12 mb-5">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header">
                                <h4 class="mb-0" style="font-weight: bold;">Active Projects</h4>
                            </div>
                            <!-- table  -->
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Project name</th>
                                                <th>Priority</th>
                                                <th>Members</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">Dropbox Design System</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning-soft">Medium</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar bootstrap 5" src="assets/images/avatar/avatar-11.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">Slack Team UI Design</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-danger-soft">High</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-4.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">GitHub Satellite</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-info-soft">Low</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-7.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">3D Character Modelling</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-warning-soft">Medium</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-10.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">Webapp Design System</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-success-soft">Track</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3 lh-1">
                                                            <h5 class="mb-1"><a href="#!" class="text-inherit text-dark">Github Event Design</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><span class="badge badge-info-soft">Low</span></td>
                                                <td>
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="assets/images/avatar/avatar-13.jpg" class="rounded-circle" />
                                                        </span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- card footer  -->
                            <div class="card-footer text-center">
                                <a href="#!" class="btn btn-info">View All Projects</a>
                            </div>
                        </div>
                    </div>                    
                </div>

    </div>
    

</div>
<?= $this->endSection(); ?>