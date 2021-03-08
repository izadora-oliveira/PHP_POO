<?php

class Animal
{
    public $nome;
    public $comprimento;
    public $qtdpatas;
    public $cor;
    public $ambiente;
    public $velocidade;

    // contrutor da classe
    public function __construct($nome_c, $comprimento_c, $qtdpatas_c, $cor_c, $ambiente_c, $velocidade_c)
    {
        $this->nome = $nome_c;
        $this->comprimento = $comprimento_c;
        $this->qtdpatas = $qtdpatas_c;
        $this->cor = $cor_c;
        $this->ambiente = $ambiente_c;
        $this->velocidade = $velocidade_c;
    }

    //setters
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;
    }
    public function setQtdpatas($qtdpatas)
    {
        $this->qtdpatas = $qtdpatas;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function setAmbiente_c($ambiente)
    {
        $this->ambiente = $ambiente;
    }
    public function setVelocidade($velocidade)
    {
        $this->velocidade = $velocidade;
    }

    //getters
    function getNome()
    {
        return $this->nome;
    }
    function getComprimento()
    {
        return $this->comprimento;
    }
    function getQtdpatas()
    {
        return $this->qtdpatas;
    }
    function getCor()
    {
        return $this->cor;
    }
    function getAmbiente()
    {
        return $this->ambiente;
    }
    function getVelocidade()
    {
        return $this->velocidade;
    }

    //método
    function dados()
  {
    return "nome: $this->nome, comprimento: $this->comprimento, quantidade de patas: $this->qtdpatas,  cor:  $this->cor, ambiente: $this->ambiente, velocidade: $this->velocidade";
  }
}

$objanimal = new Animal("gato", "36 centimentros", "4", "preto", "domestico", "20km");
echo "Informações do animal: " . $objanimal->dados();