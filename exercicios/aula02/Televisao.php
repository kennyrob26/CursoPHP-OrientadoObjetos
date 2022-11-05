<?php
    Class Televisao{
        var $marca;
        var $canal;
        var $volume;
        var $ligado;

        function ligar(){
            $this->ligado = true;
        }
        function desligar(){
            $this->ligado = false;
        }
        function avancarCanal(){
            if($this->ligado){
                $this->canal++;
            }else{
                echo"<p>Erro, a Tv está desligada</p>";
            }
        }
        function voltarCanal(){
            if($this->ligado){
                $this->canal--;
            }else{
                echo "<p>Erro, a TV está desligada</p>";
            }
        }
        function aumentarVolume(){
            if($this->ligado){
                $this->volume = $this->volume + 10;
            }else{
                echo "<p>Erro, a TV está desligada</p>";
            }
        }
        function abaixarVolume(){
            if($this->ligado){
                $this->volume = $this->volume - 10;
            }else{
                echo "<p>Erro, a TV está desligada</p>";
            }
        }

    }