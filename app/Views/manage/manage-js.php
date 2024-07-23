<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var table_recent_file;
    var file;

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

        file = FilePond.create(
            document.querySelector('#file'), {
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
                "url": "<?php echo base_url('file_ajax_list') ?>",
                "type": "POST",
                "data": function(params) {
                    params.id_parent = $('#parent_id').val();
                }
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                    "targets": [1, 2, 3, 4],
                    "className": 'text-center'
                },
                {
                    "targets": [-1], //last column
                    "render": function(data, type, row) {
                        return "<div class=\"d-inline mx-1\"><a class=\"btn btn-sm btn-warning\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"edit(" + row[4] + ")\"><i class=\"fas fa-edit\"></i></a></div><div class=\"d-inline mx-1\"><a class=\"btn btn-sm btn-danger\" href=\"javascript:void(0)\" title=\"Delete\"  onclick=\"deldata(" + row[4] + ")\"><i class=\"fas fa-trash\"></a></div>"
                    },
                    "orderable": false, //set not orderable
                },
                {
                    "targets": [0], //last column
                    "render": function(data, type, row) {
                        if (row[2] === 'folder') {
                            return "<a class=\"\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"go_to(" + row[4] + ")\"><i class=\"far fa-folder mr-2\"></i> " + row[0] + "</a>";
                        } else {

                            var param_icon = "far fa-file";
                            if (row[5] === 'csv' || row[5] === 'xlsx' || row[5] === 'xls') {
                                param_icon = "far fa-file-excel";
                            } else if (row[5] === 'doc' || row[5] === 'docx') {
                                param_icon = "far fa-file-word";
                            } else if (row[5] === 'ppt' || row[5] === 'pptx') {
                                param_icon = "far fa-file-powerpoint";
                            } else if (row[5] === 'pdf') {
                                param_icon = "far fa-file-pdf";
                            }

                            return "<a class=\"\" href=\"javascript:void(0)\" title=\"Edit\" onclick=\"download(" + row[4] + ")\"><i class=\"" + param_icon + " mr-2\"></i> " + row[0] + "." + row[5] + "</a>";
                        }
                    }
                },
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 0
                }
            ],

        });

        table_recent_file = $("#tabel_recent_file").DataTable({
            // "lengthMenu": [5, 10],
            "paging": false,
            "searching": false,
            "info": false,
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
                "url": "<?php echo base_url('recent_ajax_list_recent_file') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": ["_all"],
                "className": 'text-center',
                "orderable": false,
            }, ],

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

        $('.section_file').hide();

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


    function go_to(id) {
        if (id === 0) {
            $('#section_parent').hide();
        } else {
            $('#section_parent').show();
        }
        $('#parent_id').val(id);
        table.draw();
        console.log('parent ' + $('#parent_id').val())
    }

    function go_to_btn() {
        var params = $('#parent_id').val();

        $.ajax({
            url: "<?php echo site_url('manage/edit') ?>/" + params,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                if (data.id_parent === '0') {
                    $('#section_parent').hide();
                } else {
                    $('#section_parent').show();
                }

                $('#parent_id').val(data.id_parent);
                table.draw();
                console.log('parent ' + $('#parent_id').val())
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function add_folder() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('.section_file').hide();

        $('#label_name').text('Nama Folder');
        $('[name="type"]').val('folder');
        $('[name="id_parent"]').val($('#parent_id').val());
        $('[name="method"]').val('add');
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add Folder'); // Set Title to Bootstrap modal title
    }

    function add_file() {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('.section_file').show();

        $('#label_name').text('Nama File');
        $('[name="type"]').val('file');
        $('[name="id_parent"]').val($('#parent_id').val());
        $('[name="method"]').val('add');
        $('#modal_form').modal('show'); // show bootstrap modal
        $('.modal-title').text('Add File'); // Set Title to Bootstrap modal title
    }

    function edit(id) {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals
        $('.form-group').removeClass('has-error'); // clear error class
        $('.help-block').empty(); // clear error string

        $('[name="method"]').val('edit');
        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('manage/edit') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id_user"]').val(data.id_user);
                $('[name="username"]').val(data.username);
                $('[name="nama_project"]').val(data.nama_project);
                $('[name="status"]').val(data.status);
                $('[name="id_level"]').val(data.id_level);

                if (data.photo != null) {
                    file.setOptions({
                        filePosterMaxHeight: '200px',
                        onupdatefiles: () => {
                            document.querySelectorAll('.filepond--file-info-sub').forEach(element => {
                                element.style.display = 'none';
                            });
                        },
                        files: [{
                            // the server file reference
                            source: "<?= base_url() ?>uploads/user/" + data.photo,
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
                                    poster: "<?= base_url() ?>uploads/user/" + data.photo,
                                },
                            },
                        }]
                    });
                }

                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Ubah Project'); // Set title to Bootstrap modal title

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function save() {
        $('#btnSave').text('saving...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable

        var url = "<?php echo site_url('/manage/save') ?>";
        var formdata = new FormData($('#form')[0]);

        // append FilePond files into the form data
        pondFiles = file.getFiles();
        for (var i = 0; i < pondFiles.length; i++) {
            // append the blob file
            formdata.append('file', pondFiles[i].file);
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
                            title: 'Berhasil Disimpan!'
                        });
                    } else if (save_method == 'update') {
                        Toast.fire({
                            icon: 'success',
                            title: 'Berhasil Dihapus!'
                        });
                    }
                } else if (data.error) {

                    Toast.fire({
                        icon: 'error',
                        title: data.pesan
                    });
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

    //delete
    function deldata(id) {
        Swal.fire({
            title: 'Konfirmasi Hapus',
            text: "Apakah Anda Yakin Ingin Menghapus Ini ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Ini!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: "<?php echo site_url('manage/delete'); ?>",
                    type: "POST",
                    data: "id=" + id,
                    cache: false,
                    dataType: 'json',
                    success: function(respone) {
                        if (respone.status == true) {
                            reload_table();
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil Dihapus!'
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
</script>