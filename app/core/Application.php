<?php

    namespace App\core;

    class Application{
        public $page;
        public $params = [];


        public function __construct(){
            $this->setPage();
            $this->pageExists();
        }

        public function setPage(){
            $request = trim($_SERVER['REQUEST_URI'],'/');

            $url = explode('/',$request);
            // print_r($url);

            $this->page = isset($url[1]) ? strtolower($url[1]) : 'home';
            unset($url[0],$url[1]);
            $this->params =!empty($url)? array_values($url) : [];
            
        }

        public function pageExists(){
        
            if(file_exists(PAGES.$this->page.'.php')){
                $this->page; 
            }elseif(file_exists(ACTION.$this->page.'.php')){
                $this->page; 
            }else{
                $this->page = '404';
            }
            
        }
    }

?>