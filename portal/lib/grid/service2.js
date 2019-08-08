$(document).ready(function() {
        var dt = $('#person').dataTable({
            "ajax": "server/service.php",
            "pagingType": "full_numbers",
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<a href="' + row['url'] + '"><img width="20px" src="' + row['ico'] + '"></a>';
                    },
                    "targets": 1
                },{
                    "render": function ( data, type, row ) {
                        return '<a href="' + row['url'] + '">' + row['title'] +'</a>';
                    },
                    "targets": 2
                }
            ],
            "columns": [
                {
                    "class":          "details-control",
                    "orderable":      false,
                    "data":           null,
                    "defaultContent": ""
                },
                { "data": "ico" },
                { "data": "title" },
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


       /* $('#person tbody').on( 'click', 'img', function () {
            var data = table.row( $(this).parents('tr') ).data();
            alert( data[0] +"'s salary is: "+ data[ 5 ] );
        } );*/



        // Array to track the ids of the details displayed rows
        var detailRows = [];

        $('#person tbody').on( 'click', 'tr td.details-control', function () {
            alert('AAAAAAAAAAAAA');
            var tr = $(this).closest('tr');
            console.log(tr);
            console.log(dt);
            var row = dt.row( tr );
            console.log(row);

          /*  var tr = $(this).closest('tr');
            var row = dt.row( tr );
            var idx = $.inArray( tr.attr('id'), detailRows );

            if ( row.child.isShown() ) {
                tr.removeClass( 'details' );
                row.child.hide();

                // Remove from the 'open' array
                detailRows.splice( idx, 1 );
            }
            else {
                tr.addClass( 'details' );
                row.child( format( row.data() ) ).show();

                // Add to the 'open' array
                if ( idx === -1 ) {
                    detailRows.push( tr.attr('id') );
                }
            }*/
        } );

        // On each draw, loop over the `detailRows` array and show any child rows
        dt.on( 'draw', function () {
            $.each( detailRows, function ( i, id ) {
                $('#'+id+' td.details-control').trigger( 'click' );
            } );
        } );

} );

