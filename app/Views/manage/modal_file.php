<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Project Form</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
          <input type="hidden" value="" name="id" />
          <input type="hidden" value="" name="method" />
          <input type="hidden" value="" name="id_parent" />
          <input type="hidden" value="" name="type" />
          <div class="card-body">
            <div class="form-group mb-3">
              <label class="form-label fs-14 text-dark" for="nama" id="label_name">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" placeholder="Name">
              <small class="help-block"></small>
            </div>
            <div class="form-group mb-3">
              <label class="form-label fs-14 text-dark" for="keterangan">Keterangan</label>
              <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
              <small class="help-block"></small>
            </div>
            <div class="form-group mb-3 section_file">
              <label class="form-label fs-14 text-dark" for="file">File</label><br>
              <input type="file" class="multiple-filepond" name="file" id="file" data-allow-reorder="true">
              <input type="hidden" name="validasi_file">
              <small class="help-block">Format: .jpeg, .jpg, .png, .pdf, .txt, .csv, .ppt, .pptx, .doc</small>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
        <button type="button" id="btnSave" onclick="save()" class="btn btn-danger"><i class="fas fa-plus-circle mr-1"></i> Create</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->