
$(document).ready(function() {
        var dt = $('.display').dataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "get",
                "type": "POST"
            },
            "pagingType": "full_numbers",
            "stateSave": true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="' + urlpath() + "get/" +row['id'] + '">' + row['title'] +'</a>';
                    },
                    "targets": 1
                },
				{
                    "searchable": false,
                    "render": function ( data, type, row ) {
						var btn_edit = '<a href="' + urlpath() + "save/" +row['id'] + '">' + '<span class="fa fa-pencil"> </span>  ' +'</a>';
						var btn_dele = '<a id="'+row['id']+'" href="' + urlpath() + "delete/" +row['id'] + '&act=del">' + '<span class="fa fa-trash-o"> </span>  ' +'</a>';
						var btn_view = '<a href="' + urlpath() + "view/" +row['id'] + '">' + '<span class="fa fa-eye"> </span>  ' +'</a>';
                        return  '<div class="act">' + btn_view + btn_edit + btn_dele + '</div>';
                    },
                    "targets": 3
                }
            ],
            "columns": [
				{ "data": "date", minWidth: 20, maxWidth: 20 },
                { "data": "title", minWidth: 50 },
                { "data": "sumary", minWidth: 150, maxWidth: 400 },
				{ "data": null, minWidth: 20, maxWidth: 20 }
            ],
            "language": lan,
            buttons: [ { text: 'Reload table', action: function () { dt.ajax.reload(); } } ],
            "initComplete": function(settings, json) {
               // alert( 'DataTables has finished its initialisation.' );
               // this.column(3).visible(false);
            }
        });

        $('.display thead').on( 'click', 'th', function () {
            // ... do something with `columnData`
        } );

        var table = $('.display').DataTable();
        table.column(3).visible(true);
        
        $('a.toggle-opt').on( 'click', function (e) {
            e.preventDefault();
            var column = table.column( $(this).attr('data-column') );
            column.visible( ! column.visible() );
            if(column.visible()){
                $('a.toggle-add').show("fast");
            }else{
                $('a.toggle-add').hide("fast");
            }
        });
        
} );