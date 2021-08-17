<?php
   
   require_once "bd/conexion.php";
  
   class Model{
      public $db;

      public function __construct(){
         $this->db= conexion::conectar();
      }

      public function mostrar($tabla){
         $sql="SELECT * FROM $tabla ORDER BY DESC";
         $mostrar=$this->db->query($sql);
         return $mostrar;
      }

      public function insert($tabla,$columnas,$valores){
         $sql="INSERT INTO $tabla($columnas) VALUES ($valores)";
         $insert=$this->db->query($sql);
         return $insert;
      }

      public function actualizar($tabla,$valores,$condicion){
         $sql="UPDATE $tabla set $valores WHERE $condicion";
         $actu=$this->db->query($sql);
         return $actu;

      }

      public function eliminar($tabla,$condicion){
         $sql="DELETE FROM $tabla WHERE $condicion";
         $eliminar=$this->db->query($sql);
         return $eliminar;
      }

      public function buscar($tabla,$campo,$condicion){
         $sql="SELECT $campo FROM $tabla WHERE $condicion";
         $buscar=$this->db->query($sql);
         return $buscar;
         
      }

      public function filtrar(){

      }
    
  }
