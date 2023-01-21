<?php

class Categorie{
    private $id ;
    private $name ;



    public function __construct($name=null)
    {
        $this->name     = $name     ;
    }
    public static function show(){
        try{
            $connect = new  Dbconnection();
            $qry = "SELECT * FROM categorie";
            $stmt = $connect->connection()->prepare($qry);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            "Error".$e->getMessage();
        }
    }

}