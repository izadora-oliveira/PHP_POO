<?php
require "prato.php";
class Lanche extends Prato
{
  public $pao;
  public $recheio;
  public $molho;
  public $contador = 0;

  //fazer construtor
  function __construct($nome, $preco, $dataDeValidade, $peso, $pao, $recheio, $molho)
  {
    $this->nome[$this->contador] = $nome;
    $this->preco[$this->contador] = $preco;
    $this->dataDeValidade[$this->contador] = $dataDeValidade;
    $this->peso[$this->contador] = $peso;
    $this->pao[$this->contador] = $pao;
    $this->recheio[$this->contador] = $recheio;
    $this->molho[$this->contador] = $molho;
    $this->contador++;
    return ($this->contador);
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
  public function imprime()
  {
    echo "Nome/preco/dataDeValidade/peso/pao/recheio/molho";
    for ($i = 1; $i <= $this->contador; $i++) {
      $this->imprimirPessoa($i);
    }
  }
  public function imprimirPessoa($posicao)
  {
    $i = $posicao - 1;
    echo "<br/>";
    echo $posicao . "/" . $this->nome[$i] . "/" . $this->preco[$i] . "/" . $this->dataDeValidade[$i] . "/" . $this->peso[$i] . "/" . $this->pao[$i] . "/" . $this->recheio[$i] . "/" . $this->molho[$i];
  }
  public function toString()
  {
    return "Lanche{" + "pao=" + $this->pao + ", recheio=" + $this->recheio + ", molho=" + $this->molho + '}';
  }
}