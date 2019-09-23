$(document).ready(function() {
        var dt = $('.display').dataTable({
            "ajax": "server/service.php",
            "pagingType": "full_numbers",
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="' + row['url'] + '"><img width="20px" src="' + row['ico'] + '"></a>';
                    },
                    "targets": 0
                },{
                    "render": function ( data, type, row ) {
                        return '<a href="' + row['url'] + '">' + row['title'] +'</a>';
                    },
                    "targets": 1
                }
            ],
            "columns": [
                { "data": "ico" },
                { "data": "title", width: 250, minWidth: 150, maxWidth: 400 },
                { "data": "note" },
                { "data": "class" },
                { "data": "locate" }
            ],
            "language": lan
        });
} );

