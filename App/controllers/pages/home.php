<?php



 namespace App\controllers\pages;
 use App\models\entity\organization;
 use App\controllers\util\view;
 use App\controllers\pages\page;

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

