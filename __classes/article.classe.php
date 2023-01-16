<?php

session_start();
class User{
    private $title ;
    private $content ;
    private $id_admin ;
    private $dateCreate ;


    public function __construct($name,$content,$id_admin,$dateCreate)
    {
        $this->name     = $name     ;
        $this->content  = $content ;
        $this->id_admin      = $id_admin      ;
        $this->dateCreate    = $dateCreate    ;
    }

}