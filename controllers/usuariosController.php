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

        public function mostrar () {
            $usuarios=$this->model->mostrar('usuarios');
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
                if ($result) {
                    self::iniciar($result['nombre'],$result['rol']);
                    echo json_encode($result);
                } else {
                    echo 0;
                }
            }
        }

        public function cerrar () {
            session_unset();
            session_reset();
            session_destroy();
            header('Location: http://192.168.0.43/scp_fmtor/');
        }

        public function iniciar ($usuario,$rol) {
            $usuario = $this->model->setNombre($usuario);
            $rol = $this->model->setIdRol($rol);
            $this->model->sesion();
        }

        public function obtener () {
            $usuarios = $this->model->mostrar('usuarios');
            $Array = array();
            while ($row = $usuarios->fetch_array(MYSQLI_ASSOC)) {
                $Array[] = $row;
            }
            $json = json_encode($Array);
            echo $json;
        }

        public function insertar () { 
            if (isset($_POST['usuario'])) {
                $usuario = $_POST['usuario'];
                $email =$_POST['email'];
                $rol =$_POST['rol'];
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT, ['cost' => 10]);
                $values = "'$usuario','$password','$email','$rol'";
                $result = $this->model->insert('t_usuarios','nombre,password,correo,id_rol',$values);
                echo $result;
            } else {
                echo 'Error: No se envio nada';
            }
        }

        public function actualizar () {

        }

        public function eliminar () {
            $id = $_GET['id'];
            $result = $this->model->eliminar('t_usuarios','id='.$id);
            return $result;
        }
}