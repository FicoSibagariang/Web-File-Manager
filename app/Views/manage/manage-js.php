<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var table_recent_file;
    var file;
    var param_id_parent;

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

                            return "<a class=\"\" href=\"javascript:void(0)\" title=\"download\" onclick=\"download_data(" + row[4] + ")\"><i class=\"" + param_icon + " mr-2\"></i> " + row[0] + "." + row[5] + "</a>";
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
                "url": "<?php echo base_url('ajax_list_recent_file') ?>",
                "type": "POST"
            },
            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [1, 2, 3],
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
        param_id_parent = $('#parent_id').val();
        getDataFile(param_id_parent);
        getDataFolder(param_id_parent);

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
        getDataFile(id);
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
                getDataFile(data.id_parent);
                console.log('parent ' + $('#parent_id').val())
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function download_data(id) {
        $.ajax({
            url: "<?php echo site_url('manage/edit') ?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                // Nama file yang akan diunduh
                var fileName = data.file; // Ubah sesuai nama file yang ada di direktori

                // Path ke file yang akan diunduh
                var filePath = "<?= base_url() ?>uploads/file/" + fileName; // Ubah sesuai path ke file di server

                // Membuat elemen <a> secara dinamis
                var link = $("<a>")
                    .attr("href", filePath)
                    .attr("download", fileName);

                // Menambahkan elemen <a> ke dalam DOM
                $("body").append(link);

                // Memicu klik pada elemen <a> untuk memulai unduhan
                link[0].click();

                // Menghapus elemen <a> dari DOM setelah selesai
                link.remove();

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

                    param_id_parent = $('#parent_id').val();
                    getDataFile(param_id_parent);

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
    var currentPage = 0;
    let pages = "";
    let page_size = 8;
    let return_pages = "";

    function getDataFile(param_id_parent) {

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('manage/get_data_file') ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id_parent: param_id_parent,
            },
            success: function(data) {
                DataFile = data.data;

                pages = paginate(DataFile, page_size);

                $(".list-item").html('');
                pageLi = "";
                pages.forEach((element, index) => {
                    index_name = parseInt(index + 1);
                    if (index != 0) {
                        pageLi += '<li onclick="pageChange(' + index + ')" id="page_' + index + '" class="page-item list-item" id="page_' + index + '"><a class="page-link" href="javascript:void(0)">' + index_name + '</a></li>';
                    } else {
                        pageLi += '<li onclick="pageChange(' + index + ')" id="page_' + index + '" class="page-item list-item active" id="page_' + index + '"><a class="page-link" href="javascript:void(0)">' + index_name + '</a></li>';
                    }
                });

                $(".page-list").after(pageLi);
                page = pages[currentPage];
                printRows(page);

                return_pages = pages;

                useNextLoad();

            },
            async: false, // <- this turns it into synchronous
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function useNextLoad() {
        currentPage = currentPage;
        pages = return_pages;

    }

    function nextPage(page) {
        useNextLoad();

        if (pages.length - 1 > currentPage)
            page = currentPage + 1;
        pageChange(page);
    }

    function prePage() {
        if (currentPage < pages.length && currentPage != 0)
            page = currentPage - 1;
        pageChange(page);

    }

    function pageChange(page) {
        useNextLoad();

        currentPage = page;
        $(".list-item").removeClass("active");
        $("#page_" + page).addClass("active");
        $(".page-data").html("");
        page = pages[page];
        printRows(page);

    }

    function printRows(arr) {
        $(".page-data").html('');

        arr.forEach(element => {

            var param_icon = "far fa-file";
            if (element.type_file === 'csv' || element.type_file === 'xlsx' || element.type_file === 'xls') {
                param_icon = "far fa-file-excel";
            } else if (element.type_file === 'doc' || element.type_file === 'docx') {
                param_icon = "far fa-file-word";
            } else if (element.type_file === 'ppt' || element.type_file === 'pptx') {
                param_icon = "far fa-file-powerpoint";
            } else if (element.type_file === 'pdf') {
                param_icon = "far fa-file-pdf";
            } else if (element.type_file === 'png' || element.type_file === 'jpg' || element.type_file === 'jpeg') {
                param_icon = "far fa-file-image";
            }

            html = '<div class="card mb-3 mt-4">' +
                '<div class="card-body">' +
                '<div class="row justify-content-between align-items-center">' +
                '<div><i class="' + param_icon + ' fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i></div>' +
                '<div class="d-flex col-lg-6 col-12 mb-4 mb-lg-0 ml-4">' +
                '<div class="ms-3">' +
                '<a href="javascript:void(0)" title="download" onclick="download_data(' + element.id + ')">' +
                '<h5 class="mb-1 text-dark">' + element.nama + '.' + element.type_file + '</h5>' +
                '</a>' +
                '<p class="mb-0">Uploaded by ' + element.nama_created + '</p>' +
                '</div>' +
                '</div>' +
                '<div class="col"><span>' + element.size_file_kb + ' Kb</span></div>' +
                '<div class="col"><span> ' + element.updated_at + '</span></div>' +
                '</div>' +
                '</div>' +
                '</div>';
            $(".page-data").append(html);
        });
    }


    function paginate(arr, size) {
        return arr.reduce((acc, val, i) => {
            let idx = Math.floor(i / size)
            let page = acc[idx] || (acc[idx] = [])
            page.push(val)
            return acc
        }, [])
    }

    function getDataFolder(param_id_parent) {

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('manage/get_data_folder') ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id_parent: param_id_parent,
            },
            success: function(data) {
                DataFile = data.data;

                printFolder(DataFile);

            },
            async: false, // <- this turns it into synchronous
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }


    function printFolder(arr) {
        $(".page-data-folder").html('');

        arr.forEach(element => {

            html = '<div class="col-lg-4">' +
                '<div class="card">' +
                '<div class="card-body">' +
                '<a href="/manage/folder">' +
                '<div class="d-flex align-items-center">' +
                '<i class="nav-icon far fa-folder text-red" style="font-size: 25px; margin-right: 10px;"></i>' +
                '<div class="ml-2">' +
                '<span class="mb-0 text-dark" style="font-size: 20px;">' + element.nama + '</span>' +
                '</div>' +
                '</div>' +
                '</a>' +
                '</div>' +
                '</div>' +
                '</div>';
            $(".page-data-folder").append(html);
        });
    }
</script>