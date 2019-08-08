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
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
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
            }
        });
} );

