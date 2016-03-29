<?php
namespace classes\DB\connection;
//Konekcija sa bazom
class DBconnect{

    private static $instance = null;

    public static function makeInstance(){
        if(self::$instance === null){
            return self::$instance = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
        }

        return self::$instance;
    }

}
