<?php
    require_once "Model.php";

    class TmedidaTornillo extends Model{

        public $id;
        public $espesor;
        public $longitud;
        public $factor;

        public function __construct(){
            parent::__construct();
        }

        public function getId(){
            return $this->id;
        }

        public function getEspesor(){
            return $this->espesor;
        }

        public function getLongitud(){
            return $this->longitud;
        }

        public function getFactor(){
            return $this->factor;
        }

        public function setId($id):void{
            $this->id=$id;
        }

    }