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
    include __DIR__ . "/model/PersonModel.php";

    class Person
    {
        public function __construct(){
            $this->view = ':';
        }

		public function index(){
            $this->view = 'main:debug/portfolio';
            return array("active"=>"portfolio");
        }

        public function show(){
            $idiom = $this->assist->view->idiom("main");
            $this->view = 'dashboard:sb-admin/blank';
            return array(
                "active"=>"portfolio",
                "page_title_ico"=>  "fas fa-user",
                "page_title"=> $idiom['person']['admin']['title'],
                "page_subtitle"=> $idiom['person']['admin']['subtitle'] . ' / ' .  $idiom['person']['admin']['title'],
                "page_head"=> $this->assist->view->include(array(
                    "person/src/client/css/Person.css",
                )),
                "page_footer"=> $this->assist->view->include(array(
                    "main/idiom/es.js",
                    "main/src/client/js/utils.js",
                    "main/lib/dataTables/1.10.20/js/jquery.dataTables.min.js",
                    "main/lib/dataTables/1.10.20/js/dataTables.bootstrap4.min.js",
                    "person/src/client/js/Person.js",
                )),
                "page_body"=> $this->assist->view->compile('person:sb-admin/list')
            );
        }

        public function list($request){
            if($request['length']) $request['limit'] = $request['length'];
            if($request['start']) $request['offset'] = $request['start'];
            $this->view = '';
            $this->model = new PersonModel($this->assist->cfg);
            $out = $this->model->list($request);
            $out = $this->formatList($out);
            return json_encode($out);
        }

        private function formatList($data){
            $out = $data['data'];
            $url = $this->assist->router->url(".");  
            $path =  $this->assist->router->path();
            foreach ($out as $k=>$i){
                $out[$k]['avatar'] =  "/data/user/".strtolower($i['company'])."/". strtolower($i['user']) . ".jpg";
                if(!file_exists($path . $out[$k]['avatar'])){
                    $out[$k]['avatar'] = $url. "data/user/user_".$i['sex'].".svg";
                }
                else{
                    $out[$k]['avatar'] = $url. $out[$k]['avatar'];
                }
                $out[$k]['sex'] = ($i['sex'] == "F") ? "Femenino" : "Masculino";
                $out[$k]['company'] =  $out[$k]['company'] == 'Other' ? "" : $out[$k]['company'];
                $out[$k]['domain']  =  ($out[$k]['company'] === "") ? "" : $i['domain'] ;
                $out[$k]['email']   =  ($out[$k]['company'] === "") ? "" : $i['user'] . "@" . $i['domain'] ;
                $out[$k]['place']   =  ($out[$k]['company'] === "") ? "" : $i['place'] ;
                $out[$k]['user']    =  ($out[$k]['company'] === "") ? "" : $i['user'] ;
            }
            $data['data'] = $out;
            $data['recordsTotal'] = $data['total']; 
            $data['recordsFiltered'] = $data['recordsTotal'];
            $data['length'] = $data['limit'];
            $data['start'] = $data['offset'];
            return $data;
        }
	} 
