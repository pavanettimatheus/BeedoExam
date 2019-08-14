$(document).ready(function() {
    $('#groupTable').DataTable( {
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        "ajax": {
            "url": "GroupListController/getTable",
            "type": "POST",
            "dataSrc": "getTable"
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "created_at" }
        ]
    } );
} );