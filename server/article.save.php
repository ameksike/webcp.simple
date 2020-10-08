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
//include __DIR__ . "/lib/carrier/src/Main.php";
Carrier::active(array( 'Ksike'=> __DIR__ .'/lib/' ));
use Ksike\lql\lib\customise\lqls\src\Main as LQL;

function validate($obj, $key){
	if(!isset($obj[$key])) return "";
	$out = stripslashes($obj[$key]);
	//$out = strip_tags($out, $allowedTags);
	return $out;
}
 
if(isset($_REQUEST['btnSafe'])){
	$config = include __DIR__ . "/config.php";
	$obj = $_REQUEST;
	unset($obj['btnSafe'], $obj['art'], $obj['type']);
	$obj['description'] = validate($obj, 'description');
	$obj['sumary'] = validate($obj, 'sumary');
	
	file_put_contents(__DIR__."/../../save.log", print_r($obj, true));

	if($obj['id']!='') {
		$qm = LQL::create($config['db'])
			->update('article')
			->set( array_keys($obj), array_values($obj))
				//['title', 'sumary', 'description', 'date', 'author', 'imgico',  'imgfront',  'url', 'status'], 
				//[$obj['title'],$obj['sumary'],$obj['description'],$obj['date'],$obj['imgico'],$obj['imgfront'],$obj['url'],$obj['status'],$obj['status'],]
			->where('id', $obj['id'])
			->execute();
		;
	}else{
		$sql = LQL::create($config['db'])
			->insert('article')
			->into('title', 'sumary', 'description', 'date', 'author', 'imgico',  'imgfront',  'url', 'status')
			->values($obj['title'],$obj['sumary'],$obj['description'],$obj['date'],$obj['author'],$obj['imgico'],$obj['imgfront'],$obj['url'],$obj['status'])
			->execute()
		;
	}
}

