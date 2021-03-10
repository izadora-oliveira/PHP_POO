<?php
require_once("animal.php");

class Mamifero extends Animal
{
    public $alimento;

    //método construtor
    function __construct($nome_c, $comprimento_c, $qtdpatas_c, $cor_c, $ambiente_c, $velocidade_c, $alimento_c = null)
    {
    $this->nome = $nome_c;
    $this->comprimento = $comprimento_c;
    $this->qtdpatas = $qtdpatas_c;
    $this->cor = $cor_c;
    $this->ambiente = $ambiente_c;
    $this->velocidade = $velocidade_c;
    $this->alimento = $alimento_c;
    }

    //getters e setters
    public function setAlimento($alimento)
    {
        $this->alimento = $alimento;
    }
    function getAlimento()
    {
        return $this->alimento;
    }

    //métodos
    function dadosmamifero()
    {
        echo $this->dadosanimal();
        echo '<br/>';
        echo "alimento:", $this->alimento;
    }
}