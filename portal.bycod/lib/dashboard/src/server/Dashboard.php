<?php
/*
 * @version: 0.1
 * @authors: ing. Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @made: 23/12/2019
 * @update: 23/12/2019
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 */
    class Dashboard
    {
        public function __construct(){
            $this->view = ':';
        }

		public function index(){
        $idiom = $this->assist->view->idiom("main"); 
           $this->view = ':sb-admin/index';
           return array(
               "page_title"=> $idiom['dashboard']['conditions']['title'],
               "page_subtitle"=> $idiom['dashboard']['conditions']['subtitle']
            );
        }
        
        public function privacy(){
            $idiom = $this->assist->view->idiom("main"); 
            $this->view = 'dashboard:sb-admin/blank';
            return array(
                "active"=>"portfolio",
                "page_title"=> $idiom['dashboard']['privacy']['title'],
                "page_subtitle"=> $idiom['dashboard']['privacy']['subtitle'],
                "page_body"=> $this->assist->view->compile(':sb-admin/privacy')
            );
        }

        public function conditions(){
            $idiom = $this->assist->view->idiom("main"); 
            $this->view = 'dashboard:sb-admin/blank';
            return array(
                "active"=>"portfolio",
                "page_title"=> $idiom['dashboard']['conditions']['title'],
                "page_subtitle"=> $idiom['dashboard']['conditions']['subtitle'],
                "page_body"=> $this->assist->view->compile(':sb-admin/conditions')
            );
        }
	} 
