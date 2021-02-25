<?php
require("televisao.php");

class Controle
{
    //Atributos
    public $on;
    public $mudacanal;
    public $altervolume;

    // contrutor da classe
    function __construct($on_c, $mudacanal_c, $altervolume_c)
    {
        $this->on = $on_c;
        $this->mudacanal = $mudacanal_c;
        $this->altervolume = $altervolume_c;
        
    }

    // getters e setters
    public function setOn($on)
    {
        $this->on = $on;
    }
    public function setMudacanal($mudacanal)
    {
        $this->mudacanal = $mudacanal;
    }
    public function setAltervolume($altervolume)
    {
        $this->altervolume = $altervolume;
    }
    function getOn($on)
    {
        return $this->on;
    }
    function getMudacanal($mudacanal)
    {
        return $this->mudacanal;
    }
    function getAltervolume($altervolume)
    {
        return $this->altervolume;
    }

    //métodos
	function mudacanal($mudacanal)
    {
    $this->mudacanal = $mudacanal;
    }
    function altervolume($altervolume)
    {
    $this->altervolume = $altervolume;
    }
    
    
}