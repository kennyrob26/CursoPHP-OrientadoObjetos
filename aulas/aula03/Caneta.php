<?php
//Para utililizarmos os conceitos de visibilidade alteramos "var" por public, private ou protected
class Caneta {
    public $modelo;    
    public $cor;
    private $ponta;     //Perceba que trocamos o "var" de todos os atributos por sua visibilidade
    protected $carga;
    protected $tampada;

    public function rabiscar(){
        if($this->tampada == true){
            echo "<p> Erro! Não posso rabiscar!";
        } else {
            echo "<p>Estou rabiscando...</p>";
        }

        }
    public function tampar(){
        $this->tampada =true;
    }
    public function destampar(){
        $this->tampada = false;
    }

}