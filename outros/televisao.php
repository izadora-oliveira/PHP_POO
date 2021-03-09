<?php

class Televisao
{

    //Atributos
    public $canal;
    public $volume;

    public function __construct($canal, $volume)
    {
    $this->canal = $canal;
    $this->volume = $volume;
    }

    }
    public function setCanal($canal)
    {
        $this->canal = $canal;
    }
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }
    public function getCanal()
    {
        return $this->canal;
    }
    public function getVolume()
    {
        return $this->volume;
    }


    //métodos
  public function adicionarCanal($canal)
  {
    return $this->canal += $canal;
  }

  public function adicionarVolume($volume)
  {
    return $this->volume += $volume;
  }

  public function diminuirCanal($canal)
  {
    return $this->canal -= $canal;
  }
  public function diminuirVolume($volume)
  {
    return $this->volume -= $volume;
  }
}