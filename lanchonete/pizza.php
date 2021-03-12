<?php
require "prato.php";
class Pizza extends Prato
{
  public $borda;
  public $recheio;
  public $molho;
  public $contador = 0;

  //fazer construtor
  function __construct($nome, $preco, $dataDeValidade, $peso, $borda, $recheio, $molho)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->dataDeValidade = $dataDeValidade;
    $this->peso = $peso;
    $this->recheio = $borda;
    $this->massa = $recheio;
    $this->tipo = $molho;
  }
  
  function armazena($nome, $preco, $dataDeValidade, $peso, $borda, $recheio, $molho)
  {
    $this->nome[$this->contador] = $nome;
    $this->preco[$this->contador] = $preco;
    $this->dataDeValidade[$this->contador] = $dataDeValidade;
    $this->peso[$this->contador] = $peso;
    $this->borda[$this->contador] = $borda;
    $this->recheio[$this->contador] = $recheio;
    $this->molho[$this->contador] = $molho;
    $this->contador++;
    return ($this->contador);
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
  public function imprime()
  {
    echo "Nome/preco/dataDeValidade/peso/borda/recheio/molho";
    $posicao = 0;
    for ($i = 1; $i <= $this->contador; $i++) {
      $i = $posicao - 1;
      echo "<br/>";
      echo $posicao . "/" . $this->nome[$i] . "/" . $this->preco[$i] . "/" . $this->dataDeValidade[$i] . "/" . $this->peso[$i] . "/" . $this->borda[$i] . "/" . $this->recheio[$i] . "/" . $this->molho[$i];
    }
  }
  public function imprimirPessoa($posicao)
  {
    $i = $posicao - 1;
    echo "<br/>";
    echo $posicao . "/" . $this->nome[$i] . "/" . $this->preco[$i] . "/" . $this->dataDeValidade[$i] . "/" . $this->peso[$i] . "/" . $this->borda[$i] . "/" . $this->recheio[$i] . "/" . $this->molho[$i];
  }
  public function toString()
  {
    return "Pizza{" + "molho=" + $this->borda + ", recheio=" + $this->recheio + ", borda=" + $this->molho + '}';
  }
}