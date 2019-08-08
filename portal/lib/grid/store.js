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
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Filtrar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst":    "Primero",
                    "sLast":     "Último",
                    "sNext":     "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            buttons: [ { text: 'Reload table', action: function () { dt.ajax.reload(); } } ]
        });
} );

