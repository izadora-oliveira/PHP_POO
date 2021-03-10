<?php
require "prato.php";
class Pizza extends Prato
{
  public $molho;
  public $recheio;
  public $borda;

  //fazer construtor
  function __construct($nome, $preco, $dataDeValidade, $peso, $molho, $recheio, $borda)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->dataDeValidade = $dataDeValidade;
    $this->peso = $peso;
    $this->molho = $molho;
    $this->recheio = $recheio;
    $this->borda = $borda;
  }

  // vou deixar os set e gets com vocês
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
    return "Pizza{" + "molho=" + $this->molho + ", recheio=" + $this->recheio + ", borda=" + $this->borda + '}';
  }
}