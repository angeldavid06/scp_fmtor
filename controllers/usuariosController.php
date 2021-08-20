<?php
    require_once "models/t_usuarios.php";
    require_once "routes/web.php";

    class usuariosController {
        public $model;
        public $web;

        public function __construct(){
            $this->model= new Usuario();
            $this->web = new Web();

        }

        public function mostrar(){
            $usuarios=$this->model->mostrar('t_usuarios');
            $this->web->View('usuarios',$usuarios);
        }

        public function bitacora () {
            $bitacora = $this->model->mostrar('bitacora');
            $this->web->View('bitacora', $bitacora);
        }

        public function menu () {
            $this->web->View('principal','');
        }

        public function ingresar () {
            if (isset($_POST['nombre_usuario']) && isset($_POST['password'])) {
                $this->model->setNombre($_POST['nombre_usuario']);
                $this->model->setPassword($_POST['password']);
                $result = $this->model->ingresar();
                if ($result->total > 0) {
                    echo true;
                } else {
                    echo false;
                }
            }
        }

        public function cerrar () {
            session_unset();
            session_reset();
            session_destroy();
            header('Location: http://192.168.0.43/scp_fmtor/');
        }

        public function insertar () { 
            
        }

        public function actualizar(){

        }

        public function eliminar(){

        }
}