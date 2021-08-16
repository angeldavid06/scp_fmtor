<?php
  require_once "model.php";
    
     class t_op extends Model{
         public $op;
         public $n_pedido;
         public $fecha;
         public $cantidad;
         public $codigo_dibujo;
         public $autorizacion;
         public $agente;
         public $id_tornillo;
         public $id_cliente;


         public function __construct(){
             parent::__construct();
         }


         public function getOp(){
             return $this->op;
         }

         public function getNPedido(){
             return $this->n_pedido;
         }

         public function getFecha(){
             return $this->fecha;
         }

         public function getCantidad(){
             return $this->cantidad;
            
         }

         public function getCodigoDibujo(){
             return $this->codigo_dibujo;
         }

         public function getAutorizacion(){
             return $this->autorizacion;
         }

         public function getAgente(){
             return $this->agente;
         }

         public function getIdTornillo(){
             return $this->id_tornillo;
         }

         public function getIdCliente(){
            return $this->id_cliente;
         }

         public function setOp($op):void{
             $this->op=$op;
         }

         public function setNPedido($n_pedido):void{
             $this->n_pedido=$n_pedido;
         }

         public function setFecha($fecha):void{
             $this->fecha=$fecha;
         }

         public function setCantidad($cantidad):void{
             $this->cantidad=$cantidad;
         }

         public function setCodigoDibujo($codigo_dibujo):void{
             $this->codigo_dibujo=$codigo_dibujo;
         }

         public function setAutorizacion($autorizacion):void{
             $this->autorizacion=$autorizacion;
         }

         public function setAgente($agente): void{
             $this->agente=$agente;
         }

         public function setIdTornillo($id_tornillo):void{
             $this->id_tornillo=$id_tornillo;
         }

}