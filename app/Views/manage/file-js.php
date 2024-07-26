<script type="text/javascript">
    var save_method; //for save method string
    var table;
    var table_recent_file;
    var file;
    var param_id_parent;
    var param_searchinput;

    $(document).ready(function() {

        getDataFile();
        $('#searchInput').unbind().keyup(function() {
            getDataFile();
        });
    });

    function searchFile() {
        getDataFile();

    }

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });

    var currentPage = 0;
    let pages = "";
    let page_size = 8;
    let return_pages = "";

    function getDataFile() {

        //Ajax Load data from ajax
        $.ajax({
            url: "<?php echo site_url('manage/get_data_file_byType') ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id_parent: '',
                nama: $("#searchInput").val(),
                type_file: '<?= $type_file ?>',
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
        $(".page-data-type").html("");
        page = pages[page];
        printRows(page);

    }

    function printRows(arr) {
        $(".page-data-type").html('');

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
                param_icon = "far fa-image";
            }

            html = '<div class="card mb-3 mt-4">' +
                '<div class="card-body">' +
                '<div class="row justify-content-between align-items-center">' +
                '<div><i class="' + param_icon + ' fa-2x mr-1" style="margin-left: 7px; color: #f00;"></i></div>' +
                '<div class="d-flex col-lg-6 col-12 mb-4 mb-lg-0 ml-4">' +
                '<div class="ms-3">' +
                '<a href="#">' +
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
            $(".page-data-type").append(html);
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
</script>