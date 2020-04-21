$(document).ready(function () {
    // $('#table_id thead tr:eq(1) th').each(function () {
    //     var title = $(this).text();
    //     $(this).html('<input type="text" placeholder="Search ' + title + '" class="column_search" />');
    // });
    $('#table_id tfoot th').each(function () {
        var title = $(this).text();
        $(this).html('<input type="text" placeholder="Search ' + title + '" />');
    });

    var table = $('#table_id').DataTable({
        "ajax": {
            "url": '/site/notes-data',
            "type": "post",
        },
        "processing": true,
        "serverSide": true,
        lengthMenu: [5, 10, 25, 50],
        pageLength: 5,
        "columns": [
            {
                data: "id",
                name: "id"
            },
            {
                data: "note",
                name: "note"
            }
        ],
        orderCellsTop: true,
        // fixedHeader: true
    });
    // table.columns().every(function () {
    //     var that = this;
    //
    //     $('#table_id thead').on('keyup change clear', function () {
    //         if (that.search() !== this.value) {
    //             that.search(this.value).draw();
    //         }
    //     });
    // });

    table.columns().every(function () {
        var that = this;

        $('input', this.footer()).on('keyup change clear', function () {
            if (that.search() !== this.value) {
                that.search(this.value)
                    .draw();
            }
        });
    });
});