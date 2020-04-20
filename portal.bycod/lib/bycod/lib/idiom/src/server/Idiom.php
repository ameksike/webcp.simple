<?php
/*
 * @framework: Bycod
 * @package: Notary
 * @version: 0.1
 * @description: This is simple and light template engine for php and html support
 * @authors: ing. Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @made: 23/4/2011
 * @update: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 */
class Idiom
{
    protected $_list;

    public function __constuctor(){
        $this->_list = array();
    }
    
    public function get($key, $controller=false){
        $idiom = $this->list($controller);
        return isset($idiom[$key]) ? $idiom[$key] : '-'; 
    }

    public function list($controller=false){
        $controller = $controller ? $controller : $this->assist->cfg['bycod']['request']['controller'];
        if(!isset($this->_list[$controller])) $this->_list[$controller] = $this->load($controller);
        return $this->_list[$controller];
    }

    public function load($controller=false){
        $this->assist->cfg['idiom'] = empty($this->assist->cfg['idiom']) ? 'es' : $this->assist->cfg['idiom'];
        $file = $this->assist->route($controller) . "/idiom/" . $this->assist->cfg['idiom'];

        if(file_exists($file . ".json")){
            return json_decode($file . ".json", true);
        }else if(file_exists($file . ".php")){
            return include $file . ".php";
        }
        return array();
    }
}