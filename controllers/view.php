<?php
    class View{

         /**
         * metodo responsavel por retornar o conteudo da view
         * @param string
         * @return string
         */
        private static function getContentView($view){
            $file = __DIR__.'/../views/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : '';

        }

        /**
         * metodo responsavel por retornar o conteudo renderizado da view
         * @param string
         * @return string
         */

         public static function render($view){
            
            //conteudo da view
            $contentView = self::getContentView($view);
            return $contentView;

         }
    }

?>