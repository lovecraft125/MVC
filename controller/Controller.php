<?php namespace controller;

class Controller{
    public function loadView($view){
        include "temp/".$view.".php";
    }
}