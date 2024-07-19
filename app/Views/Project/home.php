<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  -->

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-light">
                <div class="text-left">
                    <button type="button" class="btn btn-danger label-btn" onclick="add_user()" title="Add Data"><i class="ri-add-circle-fill label-btn-icon me-2"></i> Tambah Project</button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tabel_data" class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="bg-red text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Project</th>
                            <th>Keterangan Project</th>
                            <th>Status Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->

<?php echo $modal_data; ?>

<!--  -->

<?= $this->endSection(); ?>