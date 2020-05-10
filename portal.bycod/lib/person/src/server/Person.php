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
    use Ksike\lql\lib\customise\lqls\src\Main as LQL;

    class Person
    {
        public function __construct(){
            $this->view = ':';
        }

		public function index(){
            $this->view = 'main:debug/portfolio';
            return array("active"=>"portfolio");
        }
        
        public function list(){
            LQL::setting($this->assist->cfg['db']);
            $out = LQL::create()
                ->select('*')
                ->from('person', 'p')
                ->where($this->assist->cfg['company']['field'], $this->assist->cfg['company']['role'])
                ->execute()
            ;
            
            $out = !$out ? array() : $out;
            
            foreach ($out as $k=>$i){
                $out[$k]['avatar'] = "data/user/".strtolower($i['company'])."/". strtolower($i['user']) . ".jpg";
                if(!file_exists(__DIR__ . "/../"  . $out[$k]['avatar']))
                    $out[$k]['avatar'] = "data/user/user_".$i['sex'].".svg";
                //$out[$k]['avatar'] = "<img src=\"". $out[$k]['avatar'] . "\">";
                $out[$k]['sex'] = ($i['sex'] == "F") ? "Femenino" : "Masculino";
                $out[$k]['company'] =  $out[$k]['company'] == 'Other' ? "" : $out[$k]['company'];
                $out[$k]['domain']  =  ($out[$k]['company'] === "") ? "" : $i['domain'] ;
                $out[$k]['email']   =  ($out[$k]['company'] === "") ? "" : $i['user'] . "@" . $i['domain'] ;
                $out[$k]['place']   =  ($out[$k]['company'] === "") ? "" : $i['place'] ;
                $out[$k]['user']    =  ($out[$k]['company'] === "") ? "" : $i['user'] ;
            }

            return array( "data"=>$out);
        }

        public function get($request){
            $id = isset($request['id']) ? $request['id'] : $request['param'] ;
            $config = $this->assist->cfg;
            $out = [];
            
            if(!empty($id)){
                $out["person"] = LQL::create($config['db'])
                    ->select('*')
                    ->from('person', 'p')
                    ->where('id', $id)
                    ->andWhere($config['company']['field'], $config['company']['role'])
                    ->execute()
                ;
                $out["trait"] = LQL::create($config['db'])
                    ->select("*")
                    ->from('trait', 't')
                    ->innerJoin("traituser tu", ' tu.trait', "t.id")
                    ->innerJoin("person p", ' tu.owner', "p.id")
                    ->where("p.id", $id)
                    ->andWhere($config['company']['field'], $config['company']['role'])
                    ->execute()
                ;
                $out["phonebook"] = LQL::create($config['db'])
                    ->select("*")
                    ->from('phonebook', 'g')
                    ->innerJoin("phoneuser pu", ' pu.phone', "g.id")
                    ->innerJoin("person p", ' pu.user', "p.id")
                    ->where("p.id", $id)
                    ->andWhere($config['company']['field'], $config['company']['role'])
                    ->execute()
                ;
            }
            $out = !$out ? array() : $out;

            if(isset($out["person"])){
                $out["person"][0]['avatar'] = "data/user/". strtolower($out["person"][0]['company'])."/". strtolower($out["person"][0]['user']) . ".jpg";
                if(!file_exists(__DIR__ . "/../"  . $out["person"][0]['avatar']))
                    $out["person"][0]['avatar'] = "data/user/user_".$out["person"][0]['sex'].".svg";

                $out["person"][0]['company'] =  $out["person"][0]['company'] == 'Other' ? "" : $out["person"][0]['company'];
                $out["person"][0]['domain']  =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['domain'] ;
                $out["person"][0]['email']   =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] . "@" . $out["person"][0]['domain'] ;
                $out["person"][0]['chat']    =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] . "@jabber." . $out["person"][0]['domain'] ;
                $out["person"][0]['place']   =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['place'] ;
                $out["person"][0]['user']    =  ($out["person"][0]['company'] === "") ? "" : $out["person"][0]['user'] ;
                                
            }

            return $out;
        }


        public function show(){
            $this->view = 'dashboard:sb-admin/blank';
            return array("active"=>"portfolio");
        }
	} 
