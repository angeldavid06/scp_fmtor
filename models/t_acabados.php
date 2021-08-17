<?php
require_once "Model.php";

class Tacabados extends Model{

      public $id;
      public $nombre;
      public $i_e;

      public function __construct(){
          parent::__construct();
      }

      public function getId(){
          return $this->id;
      }

      public function getNombre(){
          return $this->nombre;
      }

      public function getIe(){
          return $this->i_e;
      }

      public function setId($id):void{
          $this->id=$id;
      }

      

}