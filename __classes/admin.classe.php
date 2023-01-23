<?php
// require 'DbConnection.php';


class User{

    private $name ;
    private $email ;
    private $pwd ;


    public static function signIn($email,$pwd){
        try{
            $connect = new  Dbconnection();
            $qry = "SELECT * FROM admin where email like '$email' and pwd like '$pwd'";
            $stmt = $connect->connection()->prepare($qry);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if($stmt->rowCount() != 0){

                $_SESSION['admin'] = $result ;
                header('location:./index.php');

            }

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



