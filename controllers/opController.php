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
            $this->web->View('ordenes','');
        }
        
        public function obtener_ordenes () {
            $ops = $this->model->mostrar('ordenes');
            $Array = array();
            while ($row = $ops->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            $json = json_encode($Array);
            echo $json;
        }

        public function obtener_reporte_diario () {
            $ops = $this->model->mostrar('reporte_diario');
            $Array = array();
            while ($row = $ops->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            $json = json_encode($Array);
            echo $json;
        }

        public function buscar_op () { 
            if (isset($_POST['check_op'])) {
                if (isset($_POST['f_op'])) {
                    $op = $this->model->buscar('ordenes','op',$_POST['f_op']);
                    $Array = array();
                    while ($row = $op->fetch_array(MYSQLI_ASSOC)) {
                        $Array[] = $row;
                    }
                    $json = json_encode($Array);
                    echo $json;
                }
            }
        }


        public function buscar_fecha(){
            if(isset($_POST['check_fecha'])){
                if(isset($_POST['f_fecha'])){
                    $fecha=$this->model->buscar('ordenes','fecha',$_POST['f_fecha']);
                    $Array = array();
                    while($row = $fecha->fetch_array(MYSQL_ASSOC)){
                        $Array[]=$row;
                    }
                    $json=json_encode($Array);
                    echo $json;
                }
            }
        }

        public function buscar_cliente(){
            if(isset($_POST['check_cliente'])){
                if(isset($_POST['f_cliente'])){
                    $cliente=$this->model->buscar('ordenes','Cliente',$_POST['f_cliente']);
                    $Array= array();
                    while($row = $cliente->fecth_array(MYSQL_ASSOC)){
                        $Array[]=$row;
                    }
                    $json=json_encode($Array);
                    echo $json;
                }
            }
        }

        public function buscar_estado(){
            if(isset($_POST['check_estado'])){
                if(isset($_POST['f_estado'])){
                    $estado=$this->model->buscar('ordenes','Estado',$_POST['f_estado']);
                    $Array= array();
                    while($row = $estado->fecth_array(MYSQL_ASSOC)){
                        $Array[]=$row;
                    }
                    $json=json_encode($Array);
                    echo $json;
                }
            }
        }




   }