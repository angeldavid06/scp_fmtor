<?php
   require_once "Model.php";

   class Tprecios extends Model{
       public $id;
       public $precio;
       public $herramienta;


       public function __construct(){
           parent::__construct();
       }

       public function getId(){
           return $this->id;
       }

       public function getPrecio(){
           return $this->precio;
       }

       public function getHerramienta(){
           return $this->herramienta;
       }

       public function setId($id):void{
           $this->id=$id;
       }
   }