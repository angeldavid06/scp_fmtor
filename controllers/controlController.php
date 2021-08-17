<?php
 require_once "models/t_control_op.php";

 class controlController{
       public $model;

       public function __construct(){
           $this->model= new TcontrolOp();
       }

       public function mostrar(){
           $controles=$this->model->mostrar('t_control_op');

       }

       public function insertar(){

       }

       public function actualizar(){

       }

       public function eliminar(){
           
       }





 }