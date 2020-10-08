$(document).ready(function() {
    $('#phoneuser').dataTable({
        "scrollX": true,
            "ajax": "server/phoneuser.php",
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<img width="20px" src="' + row['avatar'] + '">';
                    },
                    "targets": 0
                },{
                    "targets": 8, "visible": false, "searchable": true
                },{
                    "targets": [ 11 ],
                    "visible": false,
                    "searchable": true
                }
            ],
            "columns": [
                { "data": "avatar" },
                { "data": "alias" },
                { "data": "firstname" },
                { "data": "lastname" },
                { "data": "title" },
                { "data": "value" },
                { "data": "extension" },
                { "data": "note" },
                { "data": "class" },
                { "data": "company" },
                { "data": "city" },
                { "data": "type" }
            ],
            "language": lan
        });
} );