<?php
    class conexion {
        public static function conectar () {
            $sql = mysqli_connect('localhost:3306','root','','db_scp');
            return $sql;
        }
    }
?>