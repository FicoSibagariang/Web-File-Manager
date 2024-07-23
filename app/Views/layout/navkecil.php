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
                  <a class="nav-link text-dark text-muted" aria-current="page" href="#">
                    <i class="nav-icon icon-link-hover far fa-folder text-red"></i>
                    My Files
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="/recent">
                    <i class="nav-icon far fa-clock text-red"></i>
                    Recent
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                    <i class="nav-icon far fa-star text-red"></i>
                    Starred
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-dark text-muted" aria-current="page" href="#!">
                    <i class=" nav-icon fas fa-trash text-red"></i>
                    Deleted Files
                  </a>
                </li>
                <br><br><br><br><br><br><br><br><br><br>
              </ul>

            </nav>