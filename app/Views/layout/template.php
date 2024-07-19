<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>File Manager</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url('AdminLTE') ?>/dist/css/adminlte.min.css?v=3.2.0">
  <link rel="stylesheet" href="<?= base_url('css') ?>/style.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Filepond -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/filepond/filepond.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/filepond-plugin-image-edit/filepond-plugin-image-edit.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/filepond-plugin-file-poster/filepond-plugin-file-poster.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/dropzone/dropzone.css">


    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>AdminLTE/plugins/sweetalert2/sweetalert2.min.css">

    <!-- SweetAlert2 -->
    <script src="<?php echo base_url(); ?>AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
</head>

<body class="layout-fixed layout-navbar-fixed">

    <?= $this->include('layout/navbar'); ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="font-weight: bold; color:#f00;"><?= $judul ?></h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="content" style="padding: 20px;">
            <?= $this->renderSection('content'); ?>
        </section>
    </div>
</body>

<script src="<?= base_url('AdminLTE') ?>/plugins/jquery/jquery.min.js"></script>

<script src="<?= base_url('AdminLTE') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url('AdminLTE') ?>/dist/js/adminlte.min.js?v=3.2.0"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Filepond JS -->
<script src="<?= base_url() ?>AdminLTE/plugins/filepond/filepond.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-edit/filepond-plugin-image-edit.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-file-validate-type/filepond-plugin-file-validate-type.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-crop/filepond-plugin-image-crop.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-resize/filepond-plugin-image-resize.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-image-transform/filepond-plugin-image-transform.min.js"></script>
<script src="<?= base_url() ?>AdminLTE/plugins/filepond-plugin-file-poster/filepond-plugin-file-poster.min.js"></script>

<?php if (isset($js)) echo $js; ?>

</html>