<?php
    require_once "models/t_op.php";
    require_once "routes/web.php";

    class opController{
        public $model;
        public $web;
    
        public function __construct(){
            $this->model=new Top();
            $this->web = new Web();
        }

        public function mostrar(){
            $ops=$this->model->mostrar('t_op');
            $this->web->View('ordenes',$ops);
        }

   }