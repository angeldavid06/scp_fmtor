<?php 

    class Web {
        public function View ($view, $data) {
            if (file_exists('views/'.$view.'.php')) {
                return require_once 'views/'.$view.'.php';
            } else {
                return false;
            }
        }
    }

?>