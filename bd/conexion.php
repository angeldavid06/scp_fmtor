<?php
    class conexion {
        public static function conectar () {
            $sql = mysqli_connect('localhost','root','','db_scp');
            return $sql;
        }
    }