<?php
    require_once "models/t_control_op.php";
    require_once "routes/web.php";

    class controlController{
        public $model;
        public $web;

        public function __construct(){
            $this->model= new TcontrolOp();
            $this->web = new Web();
        }

        public function mostrar(){
            $controles=$this->model->mostrar('t_control_op');
            $this->web->View('control',$controles);
        }

       public function insertar(){

       }

       public function actualizar(){

       }

       public function eliminar(){
           
       }
    }