<?php


spl_autoload_register(function($class){
    $old_path = explode('\\',$class);
    $new_path = implode('/',$old_path).".php";
    require_once PATH.$new_path;
});

function include_tmp($tmp){
    require_once PATH."public/temp/".$tmp.".php";
}