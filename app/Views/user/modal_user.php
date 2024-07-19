<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">User Form</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" id="form" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" value="" name="id_user" />
                    <input type="hidden" value="" name="method" />
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="contoh: tanpa spasi">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="" selected disabled>Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Non-Aktif</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="level">Hak Akses</label>
                            <select class="form-control" name="id_level" id="id_level">
                                <option value="" selected disabled>Pilih Hak Akses</option>
                                <option value="1">Administrator</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label fs-14 text-dark" for="pasfoto">Foto</label><br>
                            <input type="file" class="multiple-filepond" name="pasfoto" id="pasfoto" accept="image/png, image/jpeg, image/gif" data-allow-reorder="true" data-max-file-size="3MB" data-max-files="6">
                            <small class="help-block">Format: .jpeg, .jpg, .png</small>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Batal</button>
                <button type="button" id="btnSave" onclick="save()" class="btn btn-danger">Simpan</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->