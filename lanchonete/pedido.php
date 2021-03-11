<?php
require "lanche.php";
require "pizza.php";
require "salgadinho.php";


class Pedido
{

  public $nomeCliente;
  public $taxaDeServico;
  public $itensConsumidos;

  //$nome, $preco, $dataDeValidade, $peso, $pao, $recheio, $molho
  function imprime()
  {
    echo "Nome/preco/dataDeValidade/peso/pao/recheio/moljo";
    for ($i = 1; $i <= $this->contador; $i++) {
      $this->imprimirPessoa($i);
    }
  }
  function imprimirPessoa($posicao)
  {
    $i = $posicao - 1;
    echo "<br/>";
    echo $posicao . "/" . $this->nome[$i] . "/" . $this->idade[$i] . "/" . $this->altura[$i];
  }

  public function imprimirNotaFiscal()
  {
    echo "----Nota Fiscal-----";
    echo "<br/>";
    echo "Itens consumidos:";
    $valorFinal = 0.0;
    //implementar o resto
  }
  public function calcularTaxaDeServico()
  {
  }

  public function calcularTroco()
  {
  }
}