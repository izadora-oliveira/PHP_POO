<?php
require "prato.php";
class Lanche extends Prato
{
  public $pao;
  public $recheio;
  public $molho;

  //fazer construtor
  function __construct($nome, $preco, $dataDeValidade, $peso, $pao, $recheio, $molho)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->dataDeValidade = $dataDeValidade;
    $this->peso = $peso;
    $this->pao = $pao;
    $this->recheio = $recheio;
    $this->molho = $molho;
  }

  //setters e getters
  public function __get($atributo)
	{
		return $this->$atributo;
	}

	public function __set($atributo, $valor)
	{
		$this->$atributo = $valor;
	}

  //métodos
  public function toString()
  {
    return "Lanche{" + "pao=" + $this->pao + ", recheio=" + $this->recheio + ", molho=" + $this->molho + '}';
  }
}