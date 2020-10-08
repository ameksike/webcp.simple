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
$path = "resource/article/0/" ;
$exte = array("gif", "jpg", "png");

reset($_FILES);
$temp = current($_FILES);
$fileName = "";

if(is_uploaded_file($temp['tmp_name']))
{
    if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
        header("HTTP/1.1 400 Invalid file name,Bad request");
        return;
    }
  
    if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), $exte)){
        header("HTTP/1.1 400 Invalid extension,Bad request");
        return;
    }
      
    $fileName = $path . $temp['name'];
    move_uploaded_file($temp['tmp_name'],  __DIR__ . "/../" . $fileName);
}