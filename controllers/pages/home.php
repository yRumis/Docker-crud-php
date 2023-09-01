<?php
require_once './controllers/util/view.php';
require_once './controllers/pages/page.php';
require_once './models/entity/organization.php';

 

    class Home extends Page{ 



    /**
     * Retorna uma string.
     *
     * @return string
     */

        public static function getHome(){
            $insOrganization = new Organization;
           
            // view da home
            $content = View::render('pages/home', [
                'name'=> $insOrganization->name,
                'description'=>$insOrganization->description,
            ]);

            return parent::getPage('eu gostaria',$content);

        }

    }

    //echo View::render('pages/home');
    //echo Home::getHome('pages/home');

?>

