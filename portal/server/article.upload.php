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
include __DIR__."/upload.php";

if(isset($_REQUEST['raw'])){
	echo $fileName;
}else{
	echo json_encode(array('file_path' => $fileName));
}