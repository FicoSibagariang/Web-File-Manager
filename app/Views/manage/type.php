<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="py-6">
  <div class="row">
    <div class="col-md-12 col-12">
      <div class="page-data"></div>
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li onclick="prePage()" class="page-item page-list">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">Previous</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li onclick="nextPage()" class="page-item">
            <a class="page-link" href="#" aria-label="Next">
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