<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
      <!-- Bg -->
      <div class="pt-20 rounded-top no-repeat; background-size: cover; mt-3" style="border-radius: 0px 0px 5px 5px;">
        <div style="width: 100%; height: 130px; border-radius: 5px 5px 0px 0px; background-color:red"></div>
      </div>
      <!-- text -->
      <div class="card rounded-bottom smooth-shadow-sm ">
        <div class="d-flex align-items-center justify-content-between pb-4 px-4" style="height: 120px; margin-top:40px;">
          <div class="d-flex align-items-center" style="margin-top: -50px;">
            <div class="avatar-xxl avatar-indicators
                      avatar-online me-2 position-relative
                      d-flex justify-content-end
                      align-items-end mt-n10">
              <!-- avatar -->
              <img src="<?= base_url() ?>img/download.jpg" class="avatar rounded-circle border" alt="Image" style="width: 100px; height: 100px; background-color: grey;">
            </div>
            <!-- text -->
            <div class="lh-1">
              <h2 class="mb-0 ml-3">Jitu Chauhan
                <a href="#!" class="text-decoration-none">
                </a>
              </h2>
              <p class="mb-0 d-block ml-3">@imjituchauhan</p>
            </div>
          </div>
          <div class="mb-5">
            <a href="/settings" class="btn btn-danger d-none d-md-block">
              Edit Profile
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div class="py-6">
    <div class="row">
      <div class="col-md-12 col-12">
        <!-- card -->
        <div class="card mb-3 mt-4">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                align-items-center">
              <div>
                <i class="far fa-file-excel fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <!-- icon -->
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">Admin-Dashboard-Design.excl</h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a class="icon-link icon-link-hover" href="#" style="color: #000;">Jitu
                      Chauhan </a></p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213Kb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span> 12
                  June, 2023 04:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectOne" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="far fa-file-image fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">Admin-Dashboard-Design.jpeg</h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a href="#" style="color: #000;">Jitu
                      Chauhan </a> on 17
                    Dec, 2023 06:39 am</p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213Kb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span>30
                  May, 2023 01:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectTwo" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectTwo">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="far fa-file fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">
                      DashUI Description.doc
                    </h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0">
                    Uploaded by
                    <a href="#" style="color: #000;">
                      Jitu Chauhan
                    </a>
                    on 17 Dec, 2023 06:39 am
                  </p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213Kb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span> 12
                  May, 2023 01:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectThree" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectThree">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="fas fa-table fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-3">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">Earning-from-DashUI.xlsx
                    </h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a href="#" style="color: #000;">anne
                      brewers </a> on 17
                    Dec, 2023 06:39 am</p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213Kb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span> 12
                  May, 2023 08:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectFour" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectFour">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="far fa-file-powerpoint fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">DashUI-Marketing-Process.ppt
                    </h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a href="#" style="color: #000;">Richard
                      Christmas</a> on 17
                    Dec, 2023 06:39 am</p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213mb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span>12
                  May, 2023 02:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectFive" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectFive">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="fas fa-font fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">DashUI-Marketing-Process.txt
                    </h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a href="#" style="color: #000;">Jitu
                      Chauhan </a> on 17
                    Dec, 2023 06:39 am</p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213mb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span> 12
                  May, 2023 01:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectSix" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectSix">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body -->
          <div class="card-body">
            <div class="row justify-content-between
                      align-items-center">
              <div>
                <i class="far fa-file-video fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i>
              </div>
              <div class="d-flex col-lg-6 col-12
                        mb-4 mb-lg-0 ml-4">
                <div class="ms-3">
                  <!-- heading -->
                  <a href="#!">
                    <h5 class="mb-1 text-dark">DashUI-promo-trailer-template.mov
                    </h5>
                  </a>
                  <!-- text -->
                  <p class="mb-0
                            ">Uploaded
                    by <a href="#" style="color: #000;">Nicholas
                      binder</a> on 17
                    Dec, 2023 06:39 am</p>
                </div>
              </div>
              <div class="col">
                <!-- text -->
                <span>213mb</span>
              </div>
              <div class="col">
                <!-- date and time -->
                <span> 22
                  April, 2023 03:15 pm</span>
              </div>
              <div class="col-auto">
                <!-- dropdown -->
                <div class="dropdown dropstart">
                  <a href="#!" id="dropdownProjectSeven" data-bs-toggle="dropdown" class="btn btn-ghost btn-icon btn-sm rounded-circle" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectSeven">
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="external-link"></i>Move</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="clipboard"></i>Copy</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="download"></i>Download</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="trash-2"></i>Delete</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="edit"></i>Rename</a>
                    <a class="dropdown-item
                              d-flex
                              align-items-center" href="#!"><i class="me-2 dropdown-item-icon icon-xs" data-feather="link"></i>Get
                      link</a>
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