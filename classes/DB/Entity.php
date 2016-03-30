<?php
namespace classes\DB;

class Entity{
    //atribut za cuvanje konekcije sa bazom
    protected static $conn;
    //Uspostavlja vezu sa bazom
    protected static function setConnection(){
        static::$conn  = connection\DBconnect::makeInstance();
    }
    public function closeConnection(){
        mysqli_close(static::$conn);
    }
    //Vraca odredjeni red iz baze
    public static function find_by_id($id){
        static::setConnection();
        $table = static::$table;
        $keyColumn = static::$keyColumn;
        $sql = "SELECT * FROM ".$table." WHERE ".$keyColumn." = ".$id;
        $res = mysqli_query(static::$conn,$sql);
        $row = mysqli_fetch_object($res,get_called_class());
        return $row;
    }
    //Vraca sve podatke iz baze
    public static function find_all(){
        $result = array();
        static::setConnection();
        $keyColumn = static::$keyColumn;
        $table = static::$table;
        $sql = "SELECT * FROM ".$table." ORDER BY ".$keyColumn." DESC";
        $res = mysqli_query(static::$conn,$sql);
        while($row = mysqli_fetch_object($res,get_called_class())){
            $result[] = $row;
        }
        return $result;
    }
    //PREOSTALE CRUD METODE
    //Update
    public function update(){
        static::setConnection();
        $table = static::$table;
        $keyColumn = static::$keyColumn;
        $sql = "UPDATE ".$table." SET ";
        foreach($this as $k=>$v){
            $sql .= $k." = '".$v."',";
        }
        $sql = trim($sql, ',');
        $sql .= " WHERE ".$keyColumn." = ".$this->keyColumn;
        mysqli_query(static::$conn, $sql);
    }
    //insert
    public function insert(){
        static::setConnection();
        $table = static::$table;
        $sql = "INSERT INTO ".$table." SET ";
        foreach($this as $k=>$v){
            $sql .= $k ." = '".$v."',";
        }
        $sql = trim($sql,",");
        mysqli_query(static::$conn,$sql);
    }
    //delete
    public function delete($id){
        static::setConnection();
        $table = static::$table;
        $keyColumn = static::$keyColumn;
        $sql = "DELETE FROM ".$table." WHERE ".$keyColumn." = ".$id;
        mysqli_query(static::$conn,$sql);
        return mysqli_affected_rows(static::$conn);
    }
}