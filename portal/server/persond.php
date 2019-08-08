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
 

$out = [];
if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $out["person"] = LQL::create($config['db'])
        ->select('*')
        ->from('person', 'p')
        ->where('id', $id)
		    ->andWhere($config['company']['field'], $config['company']['role'])
        ->execute()
    ;
    $out["trait"] = LQL::create($config['db'])
        ->select("*")
        ->from('trait', 't')
        ->innerJoin("traituser tu", ' tu.trait', "t.id")
        ->innerJoin("person p", ' tu.owner', "p.id")
        ->where("p.id", $id)
		    ->andWhere($config['company']['field'], $config['company']['role'])
        ->execute()
    ;
    $out["phonebook"] = LQL::create($config['db'])
        ->select("*")
        ->from('phonebook', 'g')
        ->innerJoin("phoneuser pu", ' pu.phone', "g.id")
        ->innerJoin("person p", ' pu.user', "p.id")
        ->where("p.id", $id)
		    ->andWhere($config['company']['field'], $config['company']['role'])
        ->execute()
    ;
}
$out = !$out ? array() : $out;

$out["person"][0]['avatar'] = "data/user/". strtolower($out["person"][0]['company'])."/". strtolower($out["person"][0]['user']) . ".jpg";
if(!file_exists(__DIR__ . "/../"  . $out["person"][0]['avatar']))
    $out["person"][0]['avatar'] = "data/user/user_".$out["person"][0]['sex'].".svg";

$out["person"][0]['company'] =  $out["person"][0]['company'] == 'Other' ? "" : $out["person"][0]['company'];
$out["person"][0]['domain']  =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['domain'] ;
$out["person"][0]['email']   =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] . "@" . $out["person"][0]['domain'] ;
$out["person"][0]['chat']    =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] . "@jabber." . $out["person"][0]['domain'] ;
$out["person"][0]['place']   =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['place'] ;
$out["person"][0]['user']    =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] ;

print_r(json_encode($out));