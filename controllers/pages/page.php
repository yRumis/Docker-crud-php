<?php
//require_once './controllers/util/view.php';
//require_once './controllers/pages/home.php';



    class Page{


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

