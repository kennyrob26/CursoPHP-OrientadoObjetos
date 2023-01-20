<?php 
require_once 'Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    private $reproduzindo;

    function __construct()
    {
        $this->volume = 50;
        $this->ligado =  false;
        $this->tocando =  false;
        $this->reproduzindo = false;

    }

    function ligar(){
        $this->setLigado(true);
    }
    function desligar(){
        $this->setLigado(false);
    }
    function abrirMenu(){
        //Está ligado ou desligado?
        ($this->ligado == true) ? $l = "SIM!" : $l= "NÃO!";
        echo ("<p>Ligado: " . $l . "</p>");

        //Exibe o volume
        echo ("<p>Volume: " . $this->getVolume() . "</p>");

        //Está mutado?
        ($this->getTocando() == false) ? $t = "Está tocando" : $t = "Está mutado";
        echo ("<p>Tocando: ". $t . "</p>");

        //O conteúdo está pausado?
        ($this->reproduzindo) ? $r = "O conteúdo está sendo reproduzido" : $r = "O conteúdo foi pausado";
        echo("<p>Reproduzindo: ". $r . "</p>");
    }
    function fecharMenu(){
        
    }
    function maisVolume(){
        $this->volume += 10;
    }
    function menosVolume(){
        $this->volume -= 10;        
    }
    function ligarMudo(){
        $this->tocando = true;
    }
    function desligarMudo(){
        $this->tocando = false;;
    }
    function play(){
        $this->reproduzindo = true;
    }
    function pause(){
        $this->reproduzindo = false;
    }

    //Métodos getters e setters
    private function setVolume($v){
        $this->volume = $v;
    }

    private function getVolume(){
        return $this->volume;
    }

    private function setLigado($l){
        $this->ligado = $l;
    }

    private function getLigado(){
        return $this->ligado;
    }

    private function setTocando($t){
        $this->tocando =  $t;
    }
    
    private function getTocando(){
        return $this->tocando;
    }
    private function setReprduzindo($r){
        $this->reproduzindo = $r;
    }
    private function getReproduzindo(){
        return $this->reproduzindo;
    }



}






