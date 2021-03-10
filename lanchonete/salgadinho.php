<?php
require "prato.php";
class Salgadinho extends Prato
{
  public $recheio;
  public $massa;
  public $tipo;

  //fazer construtor
  function __construct($nome, $preco, $dataDeValidade, $peso, $recheio, $massa, $tipo)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->dataDeValidade = $dataDeValidade;
    $this->peso = $peso;
    $this->recheio = $recheio;
    $this->massa = $massa;
    $this->tipo = $tipo;
  }

  //getters e setters
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
    return "Salgadinho{" + "recheio=" + $this->recheio + ", massa=" +  $this->massa + '}';
  }
}