<?php
/*
 * Ejemplo de utilizaci?n basica de la biblioteca Ksike/LQL con Ksike/Secretary
 * */

//... paso 1: definir el espacio de nombres Ksike en el manejador de carga denominado Carrier
include __DIR__ . "/lib/carrier/src/Main.php";
Carrier::active(array( 'Ksike'=> __DIR__ .'/lib/' ));

//... paso 2: definir los espacios de nombres a utilizar
use Ksike\lcftp\src\server\Main as LcFtp;

//... paso 3: cargar las variables de configuracion
$config = include __DIR__ . "/config.php";

$key = '';
if(isset($_REQUEST['search']['value']))
    $key = $_REQUEST['search']['value'];
$deep = $key == '' ? 1 : 5;
//... paso 4: configurar la biblioteca
$obj = new LcFtp($config['ftp']);
$out = $obj->find($key, '/', $deep);
$tot = count($out);
$ous = array_slice($out, $_REQUEST['start'], $_REQUEST['length']);
print_r(json_encode(array(
    "data"            => $ous,
    "draw"            => $_REQUEST['draw'],
    "recordsFiltered" => $tot,
    "recordsTotal"    => $tot,
)));

/*
Array
(
    [draw] => 1
    [columns] => Array
        (
            [0] => Array
                (
                    [data] => type
                    [name] => 
                    [searchable] => true
                    [orderable] => true
                    [search] => Array
                        (
                            [value] => 
                            [regex] => false
                        )
                )

            [1] => Array
                (
                    [data] => label
                    [name] => 
                    [searchable] => true
                    [orderable] => true
                    [search] => Array
                        (
                            [value] => 
                            [regex] => false
                        )
                )

            [2] => Array
                (
                    [data] => type
                    [name] => 
                    [searchable] => true
                    [orderable] => true
                    [search] => Array
                        (
                            [value] => 
                            [regex] => false
                        )
                )
        )

    [order] => Array
        (
            [0] => Array
                (
                    [column] => 1
                    [dir] => asc
                )
        )

    [start] => 30
    [length] => 10
    [search] => Array
        (
            [value] => 
            [regex] => false
        )
)
*/