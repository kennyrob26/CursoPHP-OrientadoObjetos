<?php
Class Conta{
    public $numConta;
    protected $tipo;
    private $cliente;
    private $saldo;
    private $status;

    public function Conta($cliente, $tipo){
        $this->cliente = $cliente;
        $this->tipo = $tipo;
        if($tipo == "cc"){
            $this->saldo = 50;
        }elseif($tipo == "cp"){
            $this->saldo = 150;
        }
        $this->status = true;
        
        

    }
    //Métodos
    public function sacar($valor){
        if($valor <= $this->saldo && $this->status == true){
            $this->saldo = $this->saldo - $valor;
        }
    }
    public function depositar($valor){
        if($this->status == true){
            $this->saldo = $this->saldo + $valor;
        }

    }
    public function excluirConta(){
        if($this->saldo == 0){
            $this->status = false; 
        }
    }
    public function pagarMensalidade(){
        $this->saldo = $this->saldo - 12;
    }

    //Setters e Getters

    public function setNumConta($numConta){
        $this->numConta = $numConta;
    }
    public function getNumConta(){
        return $this->numConta;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setCliente($cliente){
        $this->cliente = $cliente;
    }
    public function getCliente(){
        return $this->cliente;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo;
    }


}