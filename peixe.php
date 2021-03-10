<?php
require_once "Animal.php";

class Peixe extends Animal
{

    public $caracteristica;

    //método construtor
    function __construct($nome_c, $comprimento_c, $qtdpatas_c, $cor_c, $ambiente_c, $velocidade_c, $caracteristica_c)
    {
    $this->nome = $nome_c;
    $this->comprimento = $comprimento_c;
    $this->qtdpatas = $qtdpatas_c;
    $this->cor = $cor_c;
    $this->ambiente = $ambiente_c;
    $this->velocidade = $velocidade_c;
    $this->caracteristica = $caracteristica_c;
    }

    //getters e setters
    public function setCaracteristica($caracteristica)
    {
        $this->caracteristica = $caracteristica;
    }
    function getCaracteristica()
    {
        return $this->caracteristica;
    }

    //métodos
    function dadospeixe()
    {
        echo $this->dadosanimal();
        echo '<br/>';
        echo "característica:", $this->caracteristica;
    }
}