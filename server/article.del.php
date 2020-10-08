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
include __DIR__ . "/lib/carrier/src/Main.php";

Carrier::active(array( 'Ksike'=> __DIR__ .'/lib/' ));
use Ksike\lql\lib\customise\lqls\src\Main as LQL;

if(isset($_REQUEST['art'])){
	$config = include __DIR__ . "/config.php";
	if($_REQUEST['art']!='') {
		$qm = LQL::create($config['db'])
			->delete('article')
			->where('id', $_REQUEST['art'])
			->execute();
		;
	}
}

