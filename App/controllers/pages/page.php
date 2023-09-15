<?php

    namespace App\controllers\pages;
    use App\controllers\util\view;
    use App\controllers\pages\dashboard;
   
    

    class Page extends DashBoard{


        private static function getHeader(){
            return View::render('pages/header');
        }


        private static function getFooter(){
            return View::render('pages/footer');
        }
    /**
     * metodo por retornar um conteudo generico da nossa pag.
     *
     * @return string
     */

        public static function getPage($title,$content){

            return View::render('pages/page', [
                'title'=>$title,
                'header'=> self::getHeader(),
                'content'=>$content,
                'footer'=>self::getFooter()
            ]);
        }
    }

    //echo View::render('pages/home');
    //echo Home::getHome('pages/home');

?>

