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

$config = include __DIR__ . "/config.php";
//... paso 4: configurar la biblioteca

$out = LQL::create($config['db'])
    ->select('*')
    ->from('article', 'a')
    ->orderBy('a.date', 'DESC')
    ->limit(6)
    ->execute()
;

$out = !$out ? array() : $out;

foreach ($out as $k=>$i){
    $out[$k]['ico'] = "data/user/".strtolower($i['ico'])."/". strtolower($i['ico']) . ".jpg";
    if(!file_exists(__DIR__ . "/../"  . $out[$k]['ico']))
        $out[$k]['ico'] = "data/user/user_".$i['ico'].".svg";
    //$out[$k]['ico'] = "<img src=\"". $out[$k]['avatar'] . "\">";
}
//print_r(json_encode(array( "data"=>$out)));