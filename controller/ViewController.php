<?php namespace controller;

use classes\Article;

class ViewController extends Controller{
    public function home(){
        global $sql;
        $this->articles = Article::find_by_sql($sql);
        if(isset($_GET['aid'])) {
            $this->loadView($_GET['aid']);
        }else{
            $this->loadView("main");
        }
    }
}