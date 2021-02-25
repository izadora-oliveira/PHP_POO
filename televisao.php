<?php

class Televisao
{

    //Atributos
    public $ligar;
    public $canal;
    public $volume;

    public function setLigar($ligar)
    {
        $this->ligar = $ligar;
    }
    public function setCanal($canal)
    {
        $this->canal = $canal;
    }
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    function getLigar()
    {
        return $this->ligar;
    }
    function getCanal()
    {
        return $this->canal;
    }
    function getVolume()
    {
        return $this->volume;
    }


    //Métodos
    function ligado() {
        if ($this->ligar):
            echo "<p>TV ligada!</p>";
        else:
            echo "<p>TV desligada</p>";
        endif;
    }
    
    function ligarTv() {
        $this->ligar = true;
    }
    
    function desligarTv() {
        $this->ligar = false;
    }
    
    function volumeTv(){
        echo "Volume em {$this->volume}%..";
    }
}