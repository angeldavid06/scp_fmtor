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

        public function mostrar () {
            $this->web->View('control','');
        }

        public function obtener_control() {
            $control = json_decode($_GET['control']);
            $vista = $control->vista;
            $op = $control->op;
            $ops = $this->model->filtrar($vista,'op',$op);
            $Array = array();
            while ($row = $ops->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            $json = json_encode($Array);
            echo $json;
        }

        public function obtener_info_op () {
            $op = $_GET['op'];
            $ops = $this->model->filtrar('control','op',$op);
            $Array = array();
            while ($row = $ops->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            $json = json_encode($Array);
            echo $json;
        }

       public function insertar(){

       }

       public function actualizar(){

       }

       public function eliminar(){
           
       }
    }