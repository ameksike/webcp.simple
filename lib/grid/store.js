$(document).ready(function() {
        var dt = $('.display').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "server/store.php",
                "type": "POST"
            },
            "pagingType": "full_numbers",
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="ftp://' + row['url'] + '"><img width="20px" src="images/icos/' + row['type'] + '.svg"></a>';
                    },
                    "targets": 0
                },{
                    "render": function ( data, type, row ) {
                        return '<a href="ftp://' + row['url'] + '">' + row['den'] +'</a>';
                    },
                    "targets": 1
                },{
                    "render": function ( data, type, row ) {
                        return '<a href="ftp://' + row['parent'] + '">' + row['parent'] +'</a>';
                    },
                    "targets": 2
                }
            ],
            "columns": [
                { "data": "type", width: 50 },
                { "data": "den", minWidth: 150, maxWidth: 400 },
                { "data": "parent" }
            ],
            "language": lan,
            buttons: [ { text: 'Reload table', action: function () { dt.ajax.reload(); } } ]
        });
} );

