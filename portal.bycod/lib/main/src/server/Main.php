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
    class Main
    {
        public function __construct(){
            $this->view = ':';
        }

        public function getDesign(){
            $design = include $this->assist->route("main")."/cfg/design.php";
            $design["active"] = "main";
            return $design;
        }

		public function index(){
            $this->view = ':debug/index';
            return $this->getDesign();
		}

        public function addmsg(){
            $this->view = 'vendor:metronic/admin/index';
            $design = $this->getDesign();
            $design["tpl"]["navbar"]["item"]["inbox"]["item"][] = array(
                "handler"=> "view/help",
                "photo" => "demo/src/client/img/avatar5.jpg",
                "message" => "ummm testiando mensajes 1...",
                "subject" => array(
                    "from"=> "Mustant Tieso Caldos",
                    "time"=> "1 ms"
                )
            );
            $design["tpl"]["navbar"]["item"]["inbox"]["item"][] = array(
                "handler"=> "view/help",
                "photo" => "demo/src/client/img/avatar5.jpg",
                "message" => "Adicionando mensaje 2 eee...",
                "subject" => array(
                    "from"=> "Mustant Tieso Caldos",
                    "time"=> "1 ms"
                )
            );
            $design["tpl"]["navbar"]["item"]["user"]["option"][0]["badge"] = 0;
            $design["tpl"]["navbar"]["item"]["user"]["item"][2]["badge"] = count($design["tpl"]["navbar"]["item"]["inbox"]["item"]);
            //$design["tpl"]["navbar"]["user"]["item"][3]["badge"] = count($design["tpl"]["navbar"]["inbox"]["data"]);
            return $design;
        }

        public function render(){
            $this->view = ':header';
            return array('tastico render');
        }

        public function noticias(){
            $this->view = 'vendor:metronic/admin/index';
            $design = $this->getDesign();
            $design["tpl"]["page"]["view"] = ":noticias";
            return $design;
        }
        public function test(){
            return "AAAAA";
        }
	} 
