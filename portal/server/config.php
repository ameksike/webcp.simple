<?php

$config['db']["log"]		= "log/";
$config['db']["driver"]	 	= "sqlite";					        //... valores admitidos: pgsql|mysql|mysqli|sqlite|sqlsrv
$config['db']["name"]		= "storage";		              		//... nombre de la base de datos a la cual debe conectarse
$config['db']["path"]		= __DIR__ . "/../../dashboard/data/db/";	  
$config['db']["path"]		= __DIR__ . "/../data/db/";	  		//... ruta donde se encuentra la base de datos
$config['db']["extension"]  = "db";						        //... default value db

$config['media']['url'] = "http://videoteca.cfg.labiofam.cu/emby/";
$config['media']['imp'][] = "informatica/nube/Cuntos_megas_de_Internet_necesito";
$config['media']['imp'][] = "labiofam/20190513-Consejo";
$config['media']['tips']['total'] = 114;


$config['company']['field']  = "p.role";
$config['company']['role']  = "user";

$config['ftp']['server'] = 'ftp.cfg.labiofam.cu';
$config['ftp']['deep'] = '5';
$config['ftp']['match'] = 'all';

return $config;

