<?php
/*
 * @framework: Bycod
 * @package: Notary
 * @version: 0.1
 * @description: This is simple and light request parser
 * @authors: ing. Antonio Membrides Espinosa
 * @mail: tonykssa@gmail.com
 * @made: 23/4/2011
 * @update: 23/4/2011
 * @license: GPL v3
 * @require: PHP >= 5.2.*
 */
	class Request
	{	
		public $all;
		public function __construct(){
			$this->all = false;
		}
		public function params(){
			if(!$this->all){
				if($this->method()=='cli'){
					$param = $_SERVER['argv'];
					foreach($param as $k=>$i){
						$o = explode('=', $i);
						if(count($o)>1){
							$param[$o[0]] = $this->jsondecode($o[1]);
							$param[$k] = $param[$o[0]];
						} else $param[$k] = $this->jsondecode($i) ;
					}
				}else{
					$param = $_REQUEST;
					foreach($param as $k=>$i) $param[$k] = $this->jsondecode($i);
					$pretty = $this->pretty();
					$param['controller'] = $pretty[1];
					$param['action'] = $pretty[2];
					$param['param'] = isset($pretty[3]) ? $pretty[3] : '';
				} 
				$this->all = $param;
			}
			return $this->all;
		}
		public function pretty(){
			return isset($_SERVER["PATH_INFO"]) ? explode("/", $_SERVER["PATH_INFO"]) : array();
		} 
		public function cliarg(){
			$tmp = explode(':', $_SERVER['argv'][1]); 
			if(count($tmp)>1)
			{
				$_SERVER['argv'][1] = $tmp[0];
				$_SERVER['argv'][2] = $tmp[1];
			}else{

			}
			return $_SERVER['argv'];
		}
		public function route(){
			return $this->method()=="cli" ? $this->cliarg() : $this->pretty();
		}
		public function method(){
			$argc = isset($_SERVER['argc']) ? $_SERVER['argc'] : 1;
			return $argc>1 ? 'cli' : (isset($_SERVER["PATH_INFO"]) ? 'pretty' : (isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'none')  );
		}
		protected function jsondecode($value){
			$val = json_decode($value, true);
			return ($val) ? $val : $value;
		}

        public function onRequest($assist){
            $route = $this->route();
            if(!isset($assist->cfg['bycod']['request']['controller'])) $assist->cfg['bycod']['request']['controller'] =  "main";
            if(!isset($assist->cfg['bycod']['request']['action']) ) $assist->cfg['bycod']['request']['action'] = "index";

            switch(count($route)) {
                case 0: case 1: break;
                case 2: if(!empty($route[1])) $assist->cfg['bycod']['request']['action'] = $route[1]; break;
                default:
                    if(!empty($route[1])) $assist->cfg['bycod']['request']['controller'] = $route[1];
                    if(!empty($route[2])) $assist->cfg['bycod']['request']['action'] = $route[2] ;
                break;
			}
        }
	}