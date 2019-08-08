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
$config = include __DIR__ . "/config.php";
//... paso 4: configurar la biblioteca

//... paso 5: comenzar a utilizar el LQL
/*
 * Creando una seleccion simple y obtener el sql
 * */
$out = LQL::create($config['db'])
    ->select('*')
    ->from('vphoneuser', 'p')
		->where("p.company", "LABIOFAM")
    ->execute()
;

$out = !$out ? array() : $out;

foreach ($out as $k=>$i){
    $out[$k]['avatar'] = "data/user/".$i['company']."/". $i['user'] . ".jpg";
    if(!file_exists(__DIR__ . "/../"  . $out[$k]['avatar']))
        $out[$k]['avatar'] = "data/user/user_".$i['sex'].".svg";
    //$out[$k]['avatar'] = "<img src=\"". $out[$k]['avatar'] . "\">";
    $out[$k]['type'] = ($i['type'] == "fixed") ? "Fijo" : "Mobil";
}
print_r(json_encode(array( "data"=>$out)));