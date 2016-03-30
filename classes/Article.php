<?php
namespace classes;

class Article extends DB\Entity{
    protected static $table = "articles";
    protected static $keyColumn = "id";

    public $title;
    public $body;
    public $author;

    public function set_values(array $posts){
        foreach($posts as $key=>$value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
                echo $key;
            }
        }

    }
}