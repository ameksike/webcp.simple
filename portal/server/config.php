<?php

$config['db']["log"]		= "log/";
$config['db']["driver"]	 	= "sqlite";					        //... valores admitidos: pgsql|mysql|mysqli|sqlite|sqlsrv
$config['db']["name"]		= "app";		              //... nombre de la base de datos a la cual debe conectarse
$config['db']["path"]		= __DIR__ . "/../data/db/";	  //... ruta donde se encuentra la base de datos
$config['db']["path"]		= __DIR__ . "/../../dashboard/data/db/";	  
$config['db']["extension"]  = "db";						        //... default value db


$config['company']['field']  = "p.role";
$config['company']['role']  = "user";

$config['ftp']['server'] = 'ftp.cfg.labiofam.cu';
$config['ftp']['deep'] = '5';
$config['ftp']['match'] = 'all';

return $config;