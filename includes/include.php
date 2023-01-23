<?php 
    require '__classes/Dbconnection.php';
    require '__classes/article.classe.php';
    require '__classes/categorie.classe.php';
    
    
    if(isset($_SESSION['admin'])){
        require 'views/sidbar.php';
        require 'views/dashboard.php';
        require 'views/show.php';
        require 'views/add.php';
        require 'views/edit.php';
        require 'views/settings.php';
        // require 'views/signIn.php';
    }else{
        require 'views/signIn.php';
    }
    
    require '__classes/admin.classe.php';
    
 
 ?>