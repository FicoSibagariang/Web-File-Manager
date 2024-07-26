<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2">
      <div class="position-relative">
        <div class="card">
          <div class="card-body" style="height: max-content;">
            <nav class="navbar-mail">
              <ul class="navbar-nav flex-column w-100">
                <div class="btn-group mb-3">
                  <button type="button" class="btn btn-danger btn-info" style="font-size: 13px;"><i class="fas fa-solid fa-plus mr-3"></i>Create New</button>

                  <button type="button" class="btn btn-danger btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" onclick="add_folder()" title="Add Folder">Folder</a>
                    <a class="dropdown-item" onclick="add_file()" title="Add File">File</a>
                  </div>
                </div>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="/recent">
                    <i class="nav-icon far fa-clock text-red"></i>
                    Recent
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="/manage">
                    <i class="nav-icon icon-link-hover far fa-folder text-red"></i>
                    My Files
                  </a>
                </li>
                <br><br><br><br><br><br><br><br><br><br>
              </ul>

            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 ml-3">
      <div class="mt-4 mb-6">
        <div class="mt-4 mb-6">
          <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-home" role="tab" aria-controls="custom-content-below-home" aria-selected="true"><i class="fas fa-grip-vertical text-red"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false"><i class="fas fa-list text-red"></i></a>
            </li>
          </ul>
          <div class="tab-content" id="custom-content-below-tabContent">
            <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel" aria-labelledby="custom-content-below-home-tab">
              <h5 class="mb-3 mt-4" style="font-weight: bold;">Quick Access</h5>
              <div class="mt-4 mb-6">
                <div class="row ">
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="/word">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-word text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Word</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="/pdf">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-pdf text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PDF</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="/powerpoint">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-powerpoint text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">PowerPoint</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="/excel">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-file-excel text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Excel</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card">
                      <div class="card-body">
                        <a href="/type">
                          <div class="d-flex align-items-center">
                            <i class="nav-icon far fa-image text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Image</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
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
                            <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                            <div class="ml-2">
                              <h5 class="mb-0 text-dark" style="font-size: 20px; font-weight: bold;">Figma Design</h5>
                              <span class="fs-6 "><span class="me-2 text-dark">213Kb</span>&nbsp;&nbsp;&nbsp;<span class="text-dark">17 Dec, 2023 06:39 am</span></span>
                            </div>
                          </div>
                        </a>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
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
                              <i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>
                              <div class="ml-2">
                                <span class="mb-0 text-dark" style="font-size: 20px;">Figma Design</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <h5 class="mb-3 mt-4" style="font-weight: bold;">Files</h5>
                </div>
                <div class="py-6">
                  <div class="row">
                    <div class="col-md-12 col-12">
                      <div class="page-data"></div>
                      <nav aria-label="Page navigation example">
                        <ul class="pagination">
                          <li onclick="prePage()" class="page-item page-list">
                            <a class="page-link text-danger" href="#" aria-label="Previous">
                              <span aria-hidden="true">Previous</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li onclick="nextPage()" class="page-item">
                            <a class="page-link text-danger" href="#" aria-label="Next">
                              <span aria-hidden="true">Next</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <table id="tabel_data" class="table table-bordered table-striped table-hover">
                        <thead>
                          <tr class="bg-red">
                            <th>Name</th>
                            <th>Keterangan</th>
                            <th>Type</th>
                            <th>Last Modified</th>
                            <th><i class="fas fa-cog"></i></th>
                          </tr>
                        </thead>
                        <thead id="section_parent" style="display: none;">
                          <tr class="text-center">
                            <th colspan="5" class="p-1"><a href="javascript:void(0)" onclick="go_to_btn()"><i class="fas fa-arrow-circle-left"></i> Back</a></th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <input type="text" value="0" name="parent_id" id="parent_id" style="display: none;" />
          <input type="text" value="0" name="parent_id_before" id="parent_id_before" style="display: none;" />
        </div>
      </div>
    </div>
  </div>

  <?= $modal_data; ?>
  <?= $this->endSection(); ?>