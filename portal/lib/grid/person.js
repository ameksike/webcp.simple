function format ( d ) {
    var view = '';
    view += '<table cellpadding="5" cellspacing="0" border="0" width="95%">';
    view += '<tr>' + '<td colspan="3"><h3>PERFIL</h3></td>' + '</tr>';
    view += '<tr>' + '<td width="25%"><b>Foto</b></td>'+ '<td><b>Denominación</b></td>' + '<td><b>Valor</b></td>'  + '</tr>';
    view += '<tr>' + '<td rowspan="12">' +'<img class="profilea" src="' + d['person'][0]['avatar'] + '">'+'</td>' + '</tr>';

    view += '<tr>'+ '<td>Correo</td>'  + '<td>'+d['person'][0].email+'</td>'  +  '<tr>';
    view += '<tr>'+ '<td>Chats</td>'  + '<td>'+d['person'][0].chat+'</td>'  +  '<tr>';
    view += '<tr>'+ '<td>Empresa</td>'  + '<td>'+d['person'][0].company+'</td>'  +  '<tr>';
    view += '<tr>'+ '<td>Departamento</td>' + '<td>'+d['person'][0].place+'</td>'  +  '<tr>';
    view += '<tr>'+ '<td>Cargo</td>'+ '<td>'    +   d['person'][0].position+'</td>'  +  '<tr>';
    view += '<tr>'+ '<td>Categor&iacute;a</td>' + '<td>'+   d['person'][0].category+'</td>'+ '<tr>';
    view += '</table>';
    //--------------------------------
    view += '<table cellpadding="5" cellspacing="0" border="0" width="95%">';
    view += '<tr>' + '<td colspan="3"><h3>OTROS DATOS</h3></td>' + '</tr>';
    view += '<tr>' + '<td><b>Denominación</b></td>' + '<td><b>Valor</b></td>' + '<td><b>Descripción</b></td>' + '</tr>';
    for(var i in d['trait']){
        view += '<tr>';
        view += '<td>'+d['trait'][i].title+'</td>';
        view += '<td>'+d['trait'][i].value+'</td>';
        view += '<td>'+d['trait'][i].note+'</td>';
        view += '<tr>';
    }
    view += '</table>';
    //--------------------------------
    view += '<table cellpadding="5" cellspacing="0" border="0" width="95%">';
    view += ' <tr>'+ '<td colspan="5"><h3>TELEFONOS</h3></td>' + '</tr>';
    view += ' <tr>' + '<td><b>Denominación</b></td>' + '<td><b>Número</b></td>' + '<td><b>Extensión</b></td>' + '<td><b>Notas</b></td>' + '<td><b>Tipo</b></td>' + '</tr>';
    for(var i in d['phonebook']){
        view += '<tr>';
        view += '<td>'+d['phonebook'][i].title+'</td>';
        view += '<td>'+d['phonebook'][i].value+'</td>';
        view += '<td>'+d['phonebook'][i].extension+'</td>';
        view += '<td>'+d['phonebook'][i].note+'</td>';
        view += '<td>'+((d['phonebook'][i].type=='fixed')?'Fijo':'Mobil')+'</td>';
        view += '<tr>';
    }
    return view;
}
$(document).ready(function() {
        var table = $('.display').DataTable({
            "scrollX": true,
            "pagingType": "full_numbers",
            "ajax": "server/person.php",
            stateSave: true,   
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<img width="20px" src="' + row['avatar'] + '">';
                    },
                    "targets": 1
                },{
                    "targets": 9, "visible": false, "searchable": true
                },{
                    "targets": 10, "visible": false, "searchable": true
                },{
                    "targets": 11, "visible": false, "searchable": true
                }
            ],
            "columns": [
                {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": ''
                },
                { "data": "avatar", "className": 'avatar' },
                { "data": "firstname" },
                { "data": "lastname" },
                { "data": "alias" },
                { "data": "sex" },
                { "data": "user" },
                { "data": "domain" },
                { "data": "company" },
                { "data": "place" },
                { "data": "position" },
                { "data": "category" }
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


        $('#person tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );
            if ( row.child.isShown() ) {
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                var objp = row.data();
                $.ajax({
                    type: "POST",
                    url: "server/persond.php",
                    data: "id="+objp.id,
                    success: function(msg){
                        var obj = JSON.parse(msg);
                        // Open this row
                        row.child( format(obj, objp) ).show();
                        tr.addClass('shown');

                        //alert( "Data Saved: " + msg );
                    }
                });

            }
        } );

        $('#person tbody').on('click', 'td.avatar', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );
            var objp = row.data();
            $( "#dialog" ).empty();
            $( "#dialog" ).append('<img width="100%" src="' + objp['avatar'] + '">');/**/

           // ( "#dialog" ).replaceWith('<div id="dialog" title="Foto">' +'<img width="100%" src="' + objp['avatar'] + '">'+'</div>');
            $( "#dialog" ).dialog();
        } );
} );

