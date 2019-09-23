$(document).ready(function() {
    $('#phonebook').dataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            "ajax": "server/phonebook.php",
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<img width="20px" src="' + row['ico'] + '">';
                    },
                    "targets": 0
                },{
                    "targets": [ 11 ],
                    "visible": false,
                    "searchable": true
                }
            ],
            "columns": [
                { "data": "ico" },
                { "data": "title" },
                { "data": "value" },
                { "data": "extension" },
                { "data": "note" },
                { "data": "class" },
                { "data": "company" },
                { "data": "contry" },
                { "data": "city" },
                { "data": "locale" },
                { "data": "addrees" },
                { "data": "type" }
            ],
            "language": lan
        });
} );