<?php
    

    class View{
        
         /**
         * metodo responsavel por retornar o conteudo da view
         * @param string
         * @return string
         */
        private static function getContentView($view){
            $file = __DIR__.'/../../views/'.$view.'.html';
            return file_exists($file) ? file_get_contents($file) : '';

        }

        /**
         * metodo responsavel por retornar o conteudo renderizado da view
         * @param string $view
         * @param array $vars (string/numeric)
         * @return string 
         */

         public static function render($view, $vars = []){
            
            //conteudo da view
            $contentView = self::getContentView($view);

            $key = array_keys($vars);
            $key = array_map(function($item){
                return'{{'.$item.'}}';
            },$key);

            
        

            return str_replace($key,array_values($vars),$contentView);
         }


    }
     //echo Home::getHome('pages/home');
?>