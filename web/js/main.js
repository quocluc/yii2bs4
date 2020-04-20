$(document).ready(function () {
    $('#table_id').DataTable({
        "ajax": {
            "url": '/site/notes-data',
            "type": "post",
        },
        "columns":[
            {data:"id"},
            {data: "note"}
        ]
    });
});