<?php namespace controller;

use classes\Article;

class ViewController extends Controller{
    public function home(){
        $this->articles = Article::find_all();
        if(isset($_GET['aid'])) {
            $this->loadView($_GET['aid']);
        }else{
            $this->loadView("main");
        }
    }
}