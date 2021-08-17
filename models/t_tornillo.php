<?php
   require_once "Model.php";

   class Ttornillo extends Model{
       public $id;
       public $id_acabado;
       public $id_medida;
       public $id_precio;
       public $id_material;

       public function __construct(){
           parent::__construct();
       }

       public function getId(){
           return $this->id;
       }

       public function getIdAcabado(){
           return $this->id_acabado;
       }

       public function getIdMedida(){
           return $this->id_medida;
       }

       public function getIdPrecio(){
           return $this->id_precio;

       }

       public function getIdMaterial(){
           return $this->id_material;
       }

       public function setId($id):void{
           $this->id=$id;
       }

       
   }