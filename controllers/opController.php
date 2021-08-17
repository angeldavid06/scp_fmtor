<?php
   require_once "models/t_op.php";

   class opController{
     public $model;
    
        public function __construct(){
            $this->model=new Top();
        }

        public function mostrar(){
            $ops=$this->model->mostrar('t_op');
        }

   }