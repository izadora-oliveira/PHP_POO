<?php
require("endereco.php");

class Pessoa
{
    public $nome;
    public $cpf;
    public $rg;
    public $nascimento;
    public $endereco;
    

    // contrutor da classe
    public function __construct($nome_c, $cpf_c, $rg_c, $nascimento_c)
    {
        $this->nome = $nome_c;
        $this->cpf = $cpf_c;
        $this->rg = $rg_c;
        $this->nascimento= $nascimento_c;
    }


    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    function setRg($rg)
    {
        $this->rg = $rg;
    }
    function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }
    
    function getNome()
    {
        return $this->nome;
    }
    function getCpf()
    {
        return $this->cpf;
    }
    function getRg()
    {
        return $this->rg;
    }
    function getNascimento()
    {
        return $this->nascimento;
    }

    //método
  function resumirPessoa()
  {
    return "$this->nome cpf: $this->cpf , rg: $this->rg  data de nascimento:  $this->nascimento, endereço: "  . $this->endereco;
  }
}
//instanciar o objeto
$objEndereco1 = new Endereco("Rua a", "Santo Amaro", "Recife", "PE", "54123-999");
$objPessoa1 = new Pessoa("Taty", "123.456.789-00", "123456", "19/05");
$objPessoa1->setEndereco($objEndereco1->ResumoEndereco());
echo $objPessoa1->resumirPessoa();

echo "<hr/>";
$objEndereco2 = new Endereco("Rua das Flores", "Coelhos", "Recife", "PE", "58123-999");
$objPessoa2 = new Pessoa("Cremildo", "321.456.789-00", "123456", "17/04");
$objPessoa2->setEndereco($objEndereco2->ResumoEndereco());
echo $objPessoa2->resumirPessoa();