<?php
 require_once "Model.php";

 class Trol extends Model{
     public $id;
     public $nombre;
     
     public function __construct(){
         parent::__construct();
     }

     public function getId(){
         return $this->id;
     }

     public function getNombre(){
         return $this->nombre;
     }

     public function setId($id):void{
         $this->id=$id;
     }
 }