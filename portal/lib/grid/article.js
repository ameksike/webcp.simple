var urlpath = function(){
	return  window.location.pathname.substring(0, window.location.pathname.lastIndexOf('/')+1);
}

$(document).ready(function() {
        var dt = $('.display').dataTable({
            "processing": true,
            "serverSide": false,
            "ajax": {
                "url": "server/article.get.php",
                "type": "POST"
            },
            "pagingType": "full_numbers",
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="' + urlpath() + "mod.article.id.php?art=" +row['id'] + '">' + row['title'] +'</a>';
                    },
                    "targets": 1
                }
            ],
            "columns": [
				{ "data": "date", minWidth: 25, maxWidth: 25 },
                { "data": "title", minWidth: 50 },
                { "data": "sumary", minWidth: 150, maxWidth: 400 }
            ],
            "language": {
                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningun dato disponible en esta tabla",
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
                    "sLast":     "Ultimo",
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

