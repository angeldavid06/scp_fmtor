<?php
   require_once "Model.php";

   class Testado extends Model{
       public $id;
       public $estado;

       public function __construct(){
           parent::__construct();
       }

       public function getId(){
           return $this->id;
       }

       public function getEstado(){
           return $this->estado;
       }

       public function setId($id):void{
           $this->id=$id;
       }
   }