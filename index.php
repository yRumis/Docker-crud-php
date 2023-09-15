<?php
    require_once 'vendor/autoload.php';
   use App\controllers\pages\home;

  /*  require_once './models/loguin.php';
    require_once "./models/config/config.php";
    require_once './controllers/pages/home.php';
    require_once './controllers/util/view.php'; */
    //require_once './http/request.php';
    
   
    echo Home::getHome('pages/home');
    
   
    
    
    //echo Home::getHome('pages/home');
    
    ?>

   