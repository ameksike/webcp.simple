<?php
/*
 * Ejemplo de utilizaci?n basica de la biblioteca Ksike/LQL con Ksike/Secretary
 * */

//... paso 1: definir el espacio de nombres Ksike en el manejador de carga denominado Carrier
include __DIR__ . "/lib/carrier/src/Main.php";
Carrier::active(array( 'Ksike'=> __DIR__ .'/lib/' ));

//... paso 2: definir los espacios de nombres a utilizar
use Ksike\lql\lib\customise\lqls\src\Main as LQL;

//... paso 3: cargar las variables de configuracion
/*$config['db']["log"]		= "log/";
$config['db']["driver"]	 	= "sqlite";					//... valores admitidos: pgsql|mysql|mysqli|sqlite|sqlsrv
$config['db']["name"]		= "storage";		        //... nombre de la base de datos a la cual debe conectarse
$config['db']["path"]		= __DIR__ . "/../data/db/";	//... ruta donde se encuentra la base de datos
$config['db']["extension"]  = "db";						//... default value db
$config['company']  = "LABIOFAM";*/

$config = include __DIR__ . "/config.php";
//... paso 4: configurar la biblioteca

//... paso 5: comenzar a utilizar el LQL
/*
 * Creando una seleccion simple y obtener el sql
 * */
$out = LQL::create($config['db'])
    ->select('*')
    ->from('person', 'p')
    ->where($config['company']['field'], $config['company']['role'])
    ->execute()
;

$out = !$out ? array() : $out;

foreach ($out as $k=>$i){
    $out[$k]['avatar'] = "data/user/".strtolower($i['company'])."/". strtolower($i['user']) . ".jpg";
    if(!file_exists(__DIR__ . "/../"  . $out[$k]['avatar']))
        $out[$k]['avatar'] = "data/user/user_".$i['sex'].".svg";
    //$out[$k]['avatar'] = "<img src=\"". $out[$k]['avatar'] . "\">";
    $out[$k]['sex'] = ($i['sex'] == "F") ? "Femenino" : "Masculino";
    $out[$k]['company'] =  $out[$k]['company'] == 'Other' ? "" : $out[$k]['company'];
    $out[$k]['domain']  =  ($out[$k]['company'] === "") ? "" : $i['domain'] ;
    $out[$k]['email']   =  ($out[$k]['company'] === "") ? "" : $i['user'] . "@" . $i['domain'] ;
    $out[$k]['place']   =  ($out[$k]['company'] === "") ? "" : $i['place'] ;
    $out[$k]['user']    =  ($out[$k]['company'] === "") ? "" : $i['user'] ;
}
print_r(json_encode(array( "data"=>$out)));