<?php
   
   require_once __DIR__. '/../util/view.php';
   


     class DashBoard{

        public static function getDash(){
           
                return View::render('pages/dashboard');
        }

        
     }

    
?>