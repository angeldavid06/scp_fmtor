<?php

/*$sql=mysqli_connect('localhost','root','','db_scp');

return $sql;

echo $sql;*/

class conexion{

    public static function conectar(){

        $sql=mysqli_connect('localhost','root','','db_scp');

        return $sql;

        echo $sql;

    }
     

  }