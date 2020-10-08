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
$config['sys']['pag'] = 'mod.article.id.php?art='; 
//... paso 4: configurar la biblioteca

$qm = LQL::create($config['db'])
    ->select('*')
    ->from('article', 'a')
;

$_REQUEST['type'] = !isset($_REQUEST['type']) ? "all" : $_REQUEST['type'];
switch($_REQUEST['type']){
	case "one":
		$_REQUEST['art'] = !isset($_REQUEST['art']) ? 1 : $_REQUEST['art'];
		$qm  = $qm->limit(1)->where("id", $_REQUEST['art']);
	break;
	case "news":
		$qm  = $qm->limit(4)->where('a.status', 'normal')->orderBy('a.date', 'DESC');
	break;
	case "new":
		return array(array(
			"id"=>"",
			"title"=>"",
			"imgfront"=>"",
			"imgico"=>"",
			"date"=>date("Y-m-d"),
			"sumary"=>"",
			"description"=>"",
			"author"=>"",
			"url"=>"","status"=>"normal"  
		));
	break;
	default:
		$qm  = $qm->orderBy('a.date', 'DESC');
	break;
}

$out = $qm->execute();
$out = !$out ? array() : $out;

$lst = LQL::create($config['db'])->select('*')->from('article', 'a')->orderBy('a.date', 'DESC')->limit(3)->execute();
$rel = LQL::create($config['db'])->select('*')->from('article', 'a')->where('a.status', 'relevant')->orderBy('a.date', 'DESC')->limit(2)->execute();

return $out;
//print_r(json_encode(array( "data"=>$out)));