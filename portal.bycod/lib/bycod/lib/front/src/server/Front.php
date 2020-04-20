<?php
/*
 * @framework: Bycod
 * @package: Front
 * @version: 0.1
 * @description: This is simple and fight front engine
 * @authors: ing. Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @made: 23/4/2011
 * @update: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 */
	class Front
    {
        public function onDispatch($assist){
            $controller = $assist->get($assist->cfg['bycod']['request']['controller']);
            if($controller){
                //@$controller->config = $assist->config($assist->cfg['bycod']['request']['controller']);
                //@$controller->path = $assist->route($assist->cfg['bycod']['request']['controller']);
                $controller->assist = $assist;
                $request = $assist->request->params();
                $assist->cfg['bycod']['response']['data'] = (method_exists($controller, $assist->cfg['bycod']['request']['action'])) ? $controller->{$assist->cfg['bycod']['request']['action']}($request) : false;
            }//else throw new Exception('Error: controller '.$assist->cfg['bycod']['request']['controller'].' or action '.$assist->cfg['bycod']['request']['action'].' do not exist ') ;
         }
    }