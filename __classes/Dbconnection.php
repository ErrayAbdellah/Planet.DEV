<?php 
// session_start();

class Dbconnection{


    private $host = "localhost";
    private $name = "root";
    private $dbName = "planet.dev";
    private $psw = "";

    public function  connection(){
        try{
            $dsn = "mysql:host =$this->host;dbname=$this->dbName" ;
            $options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
            $conn = new PDO($dsn , $this->name ,$this->psw,$options);
            return $conn ;
        }catch(PDOException $e){
            echo "connection is failed".$e->getMessage();
        }
    }

}