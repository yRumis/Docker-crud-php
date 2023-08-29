<?php
require_once './controllers/util/view.php';
require_once './controllers/pages/page.php';



    class Home extends Page{ 
    /**
     * Retorna uma string.
     *
     * @return string
     */

        public static function getHome(){
            // view da home
            $content = View::render('pages/home', [
                'names'=>'ramon'
            ]);

            return parent::getPage('eu gostaria',$content);

        }

    }

    //echo View::render('pages/home');
    echo Home::getHome('pages/home');

?>

