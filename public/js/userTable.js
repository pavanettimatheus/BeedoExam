$(document).ready(function() {
    $('#userTable').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        },
        "ajax": {
            "url": "UserListController/getTable",
            "type": "POST",
            "dataSrc": "getTable"
        },
        "columns": [
            { "data": "id" },
            { "data": "name" },
            { "data": "created_at" }
        ]
    } );
});

