<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row" style="padding: 10px;">
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lift" style="border-radius: 10px;">
            <!-- card body -->
            <div class="card-body" style="background-color: #fff; border-radius: 10px;">
                <a href="/recent">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="mb-0 text-danger" style="font-size: 23px; font-weight:bold;">Files</h4>
                        </div>
                        <div class="icon-shape icon-md bg-primary-soft rounded-2">
                            <i class="fas fa-suitcase fa-2x text-danger"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="mb-1 text-danger" style="font-weight: bold;">18</h1>
                        <p class="mb-0 text-danger">
                            <span class="me-2 mr-2 text-danger">2</span>
                            Completed
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lift" style="border-radius: 10px;">

            <!-- card body -->

            <div class="card-body" style="background-color: #fff; border-radius: 10px;">
                <a href="/recent">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="mb-0 text-danger" style="font-size: 23px; font-weight:bold">Folder</h4>
                        </div>
                        <div class="icon-shape icon-md bg-danger-soft text-danger rounded-2">
                            <i class="fas fa-list fa-2x text-danger"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="mb-1 text-danger" style="font-weight: bold;">132</h1>
                        <p class="mb-0 text-danger">
                            <span class="text-danger me-2 mr-2">28</span>
                            Completed
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100 card-lift" style="border-radius: 10px;">
            <!-- card body -->
            <div class="card-body" style="background-color: #fff; border-radius: 10px;">
                <a href="/manajemen_user">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div>
                            <h4 class="mb-0 text-danger" style="font-size: 23px; font-weight:bold">Teams</h4>
                        </div>
                        <div class="icon-shape icon-md bg-danger-soft text-danger rounded-2">
                            <i class="fas fa-user fa-2x text-danger"></i>
                        </div>
                    </div>
                    <!-- project number -->
                    <div class="lh-1">
                        <h1 class="mb-1 text-danger" style="font-weight: bold;">8</h1>
                        <p class="mb-0 text-danger">
                            <span class="text-danger me-2 mr-2">1</span>
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
                <h4 class="mb-0" style="font-weight: bold; color: #f00">Active Projects</h4>
            </div>
            <!-- table  -->
            <div class="card-body">
                <div class="table-responsive table-card">
                    <table class="table text-nowrap mb-0 table-centered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th style="font-size: 20px;">Project name</th>
                                <th style="font-size: 20px;">Keterangan Project</th>
                                <th style="font-size: 20px;">Members</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- card footer  -->
            <div class="card-footer text-center">
                <a href="#!" class="btn btn-danger">View All Projects</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>