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

include __DIR__ . "/model/NewsModel.php";

class News
{
    public $model;

    public function __construct(){
        $this->view = ':';
    }

    public function index(){
        $this->view = 'news:debug/news';
        $this->model = new NewsModel($this->assist->cfg);
        $items = $this->model->get();
        return array(
            "active"=>"news",
            'limit'=> $items['limit'],
            'offset'=> $items['offset'],
            'total'=> $items['total'],
            "data"=> $items['data']
        );
    }

    public function get($request=false, $normal=false){
        if($request['length']) $request['limit'] = $request['length'];
        if($request['start']) $request['offset'] = $request['start'];
        $this->view = '';
        $this->model = new NewsModel($this->assist->cfg);
        $data = $this->model->get($request, $normal);
        $data['recordsTotal'] = $data['total']; 
        $data['recordsFiltered'] = $data['recordsTotal'];
        $data['length'] = $data['limit'];
        $data['start'] = $data['offset'];
        return json_encode($data);
    }

    public function backend(){
        $idiom = $this->assist->view->idiom("main"); 
        $this->view = 'dashboard:sb-admin/blank';
        return array(
            "active"=>"portfolio",
            "page_title_ico"=>  "fas fa-newspaper",
            "page_head"=> $this->assist->view->include(array(
                "news/src/client/css/News.css",
            )),
            "page_footer"=> $this->assist->view->include(array(
                "main/idiom/es.js",
                "main/src/client/js/utils.js",
                "main/lib/dataTables/1.10.20/js/jquery.dataTables.min.js",
                "main/lib/dataTables/1.10.20/js/dataTables.bootstrap4.min.js",
                "news/src/client/js/News.js",
            )),
            "page_title"=>  $idiom['news']['admin']['title'],
            "page_subtitle"=> $idiom['news']['admin']['subtitle'] . ' / ' .  $idiom['news']['admin']['title'],
            "page_body"=> $this->assist->view->compile('news:sb-admin/list')
        );
    }

    public function view($request){
        $this->view = ':debug/news.view';        
        $this->model = new NewsModel($this->assist->cfg);
        $items = $this->model->get($request);
        return array(
            "active"=>"news",
            "item"=> $items['data'][0]
        );
    }
    
    public function upload(){
        $path = "resource/article/0/" ;
        $exte = array("gif", "jpg", "png");

        reset($_FILES);
        $temp = current($_FILES);
        $fileName = "";

        if(is_uploaded_file($temp['tmp_name']))
        {
            /*if(preg_match("/([^\w\s\d\-_~,;:\[\]\(\).])|([\.]{2,})/", $temp['name'])){
                header("HTTP/1.1 400 Invalid file name,Bad request");
                return;
            }
            if(!in_array(strtolower(pathinfo($temp['name'], PATHINFO_EXTENSION)), $exte)){
                header("HTTP/1.1 400 Invalid extension,Bad request");
                return;
            }*/
            $fileName = $path . $temp['name'];
            $route = $this->assist->route("news") ;
            move_uploaded_file($temp['tmp_name'],  $route . $fileName);
        }
    }
} 
