<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="row" style="margin-bottom: 10px; margin-left: 2px">
  <form action="#">
    <div class="input-group">
      <span class="input-group-append" style="width: 200px; position:relative">
        <input class="form-control rounded-3" type="search" value="" id="searchInput" placeholder="Search">
        <button class="btn  ms-n10 rounded-0 rounded-end" type="button" id="search" onclick="searchFile()" style="position: absolute; right:0;">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search text-dark">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </button>
      </span>
    </div>
  </form>
</div>

<div class="py-6">
  <div class="row">
    <div class="col-md-12 col-12">

      <div class="page-data-type"></div>
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

<?= $this->endSection(); ?>