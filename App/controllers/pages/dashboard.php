<?php
   
   namespace App\controllers\pages;
   use App\controllers\util\view;

   
   


     class DashBoard{

        public static function getDash(){
           
                return View::render('pages/dashboard');
        }

        
     }

    
?>