<?php 
    session_start() ;

require 'views/head.php';
// var_dump($_SESSION['user']);

if(!isset($_SESSION['user'])){
    header('location:views/signIn.php');
}

require 'includes/include.php';

require 'views/footer.php';





