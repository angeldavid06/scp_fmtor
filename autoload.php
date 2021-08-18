<?php

    function clase ($clase) {
        if (file_exists('controllers/'.$clase.'.php')) {
            require_once __DIR__.'\controllers/'.$clase.'.php';
        } else {
            return false;
        }
    }

    spl_autoload_register('clase');

?>