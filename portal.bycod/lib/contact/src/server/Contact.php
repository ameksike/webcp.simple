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
    class Contact
    {
        public function __construct(){
            $this->view = ':';
        }

		public function index(){
           $this->view = ':debug/contact';
           return array("active"=>"contact");
		}
	} 
