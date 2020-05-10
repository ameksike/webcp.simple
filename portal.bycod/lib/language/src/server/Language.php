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

class language
{
    public function __construct(){
        $this->view = ':';
    }

    public function index(){
        $this->view = 'news:debug/news';
        $items = $this->get();
        return array(
            "active"=>"news",
            'limit'=> $items['limit'],
            'offset'=> $items['offset'],
            'total'=> $items['total'],
            "data"=> $items['list']
        );
    }

    public function show(){
        $idiom = $this->assist->view->idiom("main"); 
        $this->view = 'dashboard:sb-admin/blank';
        return array(
            "active"=>"portfolio",
            "page_title"=> $idiom['language']['admin']['title'],
            "page_subtitle"=> $idiom['language']['admin']['subtitle'],
            "page_head"=> $this->assist->view->css('Language', 'language'),
            "page_footer"=> $this->assist->view->js('Language', 'language'),
            "page_body"=> $this->assist->view->compile('language:sb-admin/list')
        );
    }
}
