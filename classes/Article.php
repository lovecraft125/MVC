<?php
namespace classes;

class Article extends DB\Entity{
    protected static $table = "articles";
    protected static $keyColumn = "id";

    public $title;
    public $body;
    public $author;
    public static function count_all(){
        $sql = "SELECT COUNT(*) FROM ".self::$table;
        self::setConnection();
        $res = mysqli_query(self::$conn, $sql);
        $row = mysqli_fetch_array($res);
        return (int)array_shift($row);

    }
    public function set_values(array $posts){
        foreach($posts as $key=>$value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
                echo $key;
            }
        }

    }
}