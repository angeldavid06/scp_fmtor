<?php
     require_once "Model.php";

    class Usuario extends Model{

        public $id;
        public $nombre;
        public $password;
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

        public function setIdRol($idRol) : void{
            $this->idRol=$idRol;
        }

        public function ingresar () {
            $result = Model::ingresarU($this->nombre, $this->password);
            return $result;
        }
    }

