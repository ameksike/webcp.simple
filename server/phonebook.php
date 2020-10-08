<?php
/*
 *
 * @package: Simple Web Corporative Portal
 * @version: 0.1
 * @authors: Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @created: 23/4/2011
 * @updated: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 *
 */

//... paso 1: definir el espacio de nombres Ksike en el manejador de carga denominado Carrier
include __DIR__ . "/lib/carrier/src/Main.php";
Carrier::active(array( 'Ksike'=> __DIR__ .'/lib/' ));

//... paso 2: definir los espacios de nombres a utilizar
use Ksike\lql\lib\customise\lqls\src\Main as LQL;

//... paso 3: cargar las variables de configuracion
$config = include __DIR__ . "/config.php";

//... paso 4: configurar la biblioteca

//... paso 5: comenzar a utilizar el LQL
/*
 * Creando una seleccion simple y obtener el sql
 * */
$out = LQL::create($config['db'])
    ->select('*')
    ->from('phonebook', 'p')
    ->execute()
;

foreach ($out as $k=>$i){
	$out[$k]['type'] = ($i['type'] == "fixed") ? "Fijo" : "Movil";
    $out[$k]['ico'] = ($i['type'] == "fixed") ? "phone-call-us" : "tmovil-black";
	$out[$k]['ico'] = "images/icos/". $out[$k]['ico'] . ".svg";
	//$out[$k]['ico'] = "<img width=\"20px\" src=\"". $out[$k]['ico'] . "\">";
}
print_r(json_encode(array( "data"=>$out)));