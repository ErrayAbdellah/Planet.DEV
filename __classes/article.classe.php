<?php

use User as GlobalUser;

session_start();
class Article{
    private $title ;
    private $content ;
    private $id_admin ;
    private $dateCreate ;


    public function __construct($title,$content,$id_admin,$dateCreate)
    {
        $this->title     = $title     ;
        $this->content  = $content ;
        $this->id_admin      = $id_admin      ;
        $this->dateCreate    = $dateCreate    ;
    }
    public static function show(){
        try{
            $connect = new  Dbconnection();
            $qry = "SELECT * FROM article";
            $stmt = $connect->connection()->prepare($qry);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }
    public static function create(){

    }
    public static function upDate($id){

    }
    public static function delete($id){

    }


}

var_dump(Article::show());