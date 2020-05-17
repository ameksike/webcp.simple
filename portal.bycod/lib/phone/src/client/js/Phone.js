
function icoUrl(row){
    let url = Bycod.router.module("theme");
    let ico = row['type']=="fixed" ? "phone-call-us" : "tmovil-black" ;
    return url + "/src/client/tpl/debug/img/icos/"+ ico + ".svg";
}

$(document).ready(function() {
    $('#phonebook').dataTable({
            "scrollX": true,
            "serverSide": true,
            "pagingType": "full_numbers",
            "ajax":  Bycod.router.action("phone/list"), 
            stateSave: true,
            "columnDefs": [
                {
                    "render": function ( data, type, row ) {
                        return '<img width="20px" src="' + icoUrl(row) + '">';
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