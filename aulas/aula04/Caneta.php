<?php
class Caneta {
    private $modelo;
    private $ponta;
    private $tampada;

    public function __construct($m, $p){
        $this->modelo = $m;
        $this->ponta = $p;
        $this->tampar();
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    } 
    public function setPonta($p){
        $this->ponta = $p;
    }
    public function tampar(){
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada =  false;
    }
}