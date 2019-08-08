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

$config['sys']['pag'] = 'mod.article.id.php?art='; 
//... paso 4: configurar la biblioteca

//... paso 5: comenzar a utilizar el LQL
/*
 * Creando una seleccion simple y obtener el sql
 
SELECT * FROM article as a
ORDER BY a.date DESC
LIMIT 6
 
 * */
$qm = LQL::create($config['db'])
    ->select('*')
    ->from('article', 'a')
    ->orderBy('a.date', 'DESC')
    ->limit(6)
;

$qm = isset($_REQUEST['art']) ? $qm->where("id", $_REQUEST['art']) : $qm;

$out = $qm->execute();

$out = !$out ? array() : $out;

foreach ($out as $k=>$i){
   /* $out[$k]['ico'] = "data/user/".strtolower($i['ico'])."/". strtolower($i['ico']) . ".jpg";
    if(!file_exists(__DIR__ . "/../"  . $out[$k]['ico']))
        $out[$k]['ico'] = "data/user/user_".$i['ico'].".svg";*/
    //$out[$k]['ico'] = "<img src=\"". $out[$k]['avatar'] . "\">";
	$out[$k]["sumary"] = empty($out[$k]["description"]) ? $out[$k]["sumary"] : $out[$k]["sumary"] . '<a href="'.$config['sys']['pag'].$out[$k]["id"].'"> Leer m&aacute;s... </a>';
}

return $out;
//print_r(json_encode(array( "data"=>$out)));