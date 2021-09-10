<?php
    class conexion {
        public static function conectar () {
            $sql = mysqli_connect('localhost:3307','root','','db_scp');
            return $sql;
        }
    }
?>