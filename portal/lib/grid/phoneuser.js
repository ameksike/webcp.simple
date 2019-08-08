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