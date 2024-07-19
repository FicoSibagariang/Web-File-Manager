<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var pasfoto;

    $(document).ready(function() {

        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginImageExifOrientation,
            FilePondPluginFileValidateSize,
            FilePondPluginFileEncode,
            FilePondPluginImageEdit,
            FilePondPluginFileValidateType,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform,
            FilePondPluginFilePoster
        );

        pasfoto = FilePond.create(
            document.querySelector('#pasfoto'), {
                labelIdle: `Drag & Drop your picture or <span class="filepond--label-action"> Browse </span>`,
                allowMultiple: false,
                instantUpload: false,
                allowProcess: false
            });

        table = $("#tabel_data").DataTable({
            "responsive": true,
            "autoWidth": false,
            "language": {
                "sEmptyTable": "Data Belum Ada"
            },
            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('user_ajax_list') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": ["_all"],
                "className": 'text-center'
            }, {
                "targets": [-1], //last column
                "render": function(data, type, row) {
                    if (row[3] == "0") {
                        return "<div class=\"d-inline mx-1\"><a class=\"btn btn-md btn-warning\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_user(" + row[4] + ")\">Ubah</a></div> <div class=\"d-inline mx-1\"><a class=\"btn btn-md btn-danger\" href=\"javascript:void(0)\" title=\"Delete\"  onclick=\"deluser(" + row[4] + ")\"><i class=\"fas fa-trash\"></i> Hapus</a></div>"
                    } else {
                        return "<div class=\"d-inline mx-1\"><a class=\"btn btn-md btn-warning\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit_user(" + row[4] + ")\"> Ubah</a></div> <div class=\"d-inline mx-1\"><a class=\"btn btn-md btn-danger\" href=\"javascript:void(0)\" title=\"Reset Password\" onclick=\"riset(" + row[4] + ")\"><i></i> Reset Password</a></div>";
                    }
                },
                "orderable": false, //set not orderable
            }, {
                "targets": [-2], //last column
                "render": function(data, type, row) {
                    if (row[3] == "0") {
                        return "<div class=\"badge bg-danger text-white text-wrap\">Non-Aktif</div>"
                    } else {
                        return "<div class=\"badge bg-success text-white text-wrap\">Aktif</div>";
                    }
                }
            }, {
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],

        });

        $("input").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });
        $("textarea").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });
        $("select").change(function() {
            $(this).parent().parent().removeClass('has-error');
            $(this).next().empty();
            $(this).removeClass('is-invalid');
        });

    });

    function reload_table() {
        table.ajax.reload(null, false); //reload datatable ajax 
    }

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    // Button Tabel

    function riset(id) {

        Swal.fire({
            title: 'Anda Yakin Ingin Mengatur Ulang Password ?',
            text: "Default Password : password123",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Atur Ulang Password!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo site_url('user/reset'); ?>",
                    type: "POST",
                    data: "id=" + id,
                    cache: false,
                    dataType: 'json',
                    success: function(respone) {
                        if (respone.status == true) {
                            reload_table();
                            Swal.fire({
                                icon: 'success',
                                title: 'Password Berhasil Diatur Ulang!',
                            });
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Reset password Error!!.'
                            });
                        }
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

    //delete
    function deluser(id) {
        Swal.fire({
            title: 'Konfirmasi Hapus user',
            text: "Apakah Anda Yakin Ingin Menghapus user Ini ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus user Ini!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo site_url('user/delete'); ?>",
                    type: "POST",
                    data: "id=" + id,
                    cache: false,
                    dataType: 'json',
                    success: function(respone) {
                        if (respone.status == true) {
                            reload_table();
                            Swal.fire({
                                icon: 'success',
                                title: 'Data user Berhasil Dihapus!'
                            });
                        } else {
                            Toast.fire({
                                icon: 'error',
                                title: 'Delete Error!!.'
                            });
                        }
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    }

    function add_user() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string
        $('[name="method"]').val('add');
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Tambah user'); // Set Title to Bootstrap modal title
    }

    function edit_user(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('[name="method"]').val('edit');
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('user/edituser') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id_user"]').val(data.id_user);
                $('[name="username"]').val(data.username);
                $('[name="nama"]').val(data.nama);
                $('[name="status"]').val(data.status);
                $('[name="id_level"]').val(data.id_level);

                if (data.photo != null) {
                    pasfoto.setOptions({
                        filePosterMaxHeight: '200px',
                        onupdatefiles: () => {
                            document.querySelectorAll('.filepond--file-info-sub').forEach(element => {
                                element.style.display = 'none';
                            });
                        },
                        files: [{
                            // the server file reference
                            source: "<?= base_url() ?>assets/images/uploads/user/" + data.photo,
                            // set type to local to indicate an already uploaded file
                            options: {
                                type: "local",
                                // stub file information
                                file: {
                                    name: data.photo,
                                    size: 2000000,
                                    type: "image/jpeg",
                                },
                                // pass poster property
                                metadata: {
                                    poster: "<?= base_url() ?>assets/images/uploads/user/" + data.photo,
                                },
                            },
                        }]
                    });
                }

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Ubah User'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function save() {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable

        var url = "<?php echo site_url('user/save') ?>";
        var formdata = new FormData($('#form')[0]);

        // append FilePond files into the form data
        pondFiles = pasfoto.getFiles();
        for (var i = 0; i < pondFiles.length; i++) {
            // append the blob file
            formdata.append('pasfoto', pondFiles[i].file);
        }

        $.ajax({
            url: url,
            type: "POST",
            data: formdata,
            dataType: "JSON",
            cache: false,
            contentType: false,
            processData: false,
            success: function(data) {
                if (data.status) {
                    $('#modal_form').modal('hide');
                    reload_table();
                    if (save_method == 'add') {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data User Berhasil Disimpan!'
                        });
                    } else if (save_method == 'update') {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data User Berhasil Diubah!'
                        });
                    }
                } else if (data.error) {
                    toastr.error(
                        data.pesan
                    );
                } else {
                    $.each(data.errors, function(key, val) {
                        $('[name="' + key + '"]').addClass('is-invalid');
                        $('[name="' + key + '"]').closest('.kosong').append('<span></span>');
                        $('[name="' + key + '"]').next().text(val).addClass('invalid-feedback').removeClass('help-block');
                        if (val === '') {
                            $('[name="' + key + '"]').removeClass('is-invalid');
                            $('[name="' + key + '"]').closest('.kosong').append('<span></span>');
                            $('[name="' + key + '"]').next().text(val).removeClass('invalid-feedback').addClass('help-block');
                        }
                    });
                }
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable


            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus);
                // alert('Error adding / update data');
                Toast.fire({
                    icon: 'error',
                    title: 'Error!!.'
                });
                $('#btnSave').text('Simpan'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable

            }
        });
    }
</script>