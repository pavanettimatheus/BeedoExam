$(document).ready(function() {
    $('#postTable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        "ajax": {
            "url": "PostListController/getTable",
            "type": "POST",
            "dataSrc": "getTable"
        },
        "columns": [
            { "data": "id" },
            { "data": "title" },
            { "data": "created_at" }
        ]
    } );
} );