<?php
require 'DbConnection.php';

session_start();
class User{

    private $name ;
    private $email ;
    private $pwd ;


    // public function __construct($name,$email,$pwd,)
    // {
    //     $this->name     = $name     ;
    //     $this->email    = $email    ;
    //     $this->pwd      = $pwd      ;
    // }

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



