<?php
     require_once "Model.php";

    class Usuario extends Model{

        public $id;
        public $nombre;
        public $password;
        public $email;
        public $idRol;

        public function __construct(){
        parent::__construct();
        }

        public function getId(){
        return $this->id;
        }

        public function getNombre(){
           return $this->nombre;
        }

        public function getPassword(){
           return $this->password;
        }

        public function getEmail(){
           return $this->email;
        }

        public function getIdRol(){
           return $this->idRol;
        }

        public function setId($id): void{
            $this->id=$id;
        }

        public function setNombre($nombre): void{
            $this->nombre=$nombre;

        }

        public function setPassword($password) :void {
            $this->password=$password;
        }

        public function setEmail($email) :void {
            $this->email=$email;
        }

        public function setIdRol($idRol) : void{
            $this->idRol=$idRol;
        }

        public function ingresar () {
            $result = Model::ingresarU($this->nombre, $this->password);
            return $result;
        }

        public function sesion () {
            $_SESSION['usuario'] = $this->nombre;
            $_SESSION['rol'] = $this->idRol;
        }
    }

