<?php
  require_once "models/t_usuarios.php";

  class usuariosController {
      public $model;

      public function __construct(){
          $this->model= new Usuario();

      }

      public function mostrar(){
          $usuarios=$this->model->mostrar('t_usuarios');
      }

      public function ingresar(){
          
      }

      public function insertar(){
          

      }


      public function actualizar(){

      }

      public function eliminar(){

      }


  }