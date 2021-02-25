<?php
require("endereco.php");

class Pessoa
{
    public $nome;
    private $cpf;
    private $rg;
    private $nascimento;
    

    // contrutor da classe
    function __construct($nome_c, $cpf_c, $rg_c)
    {
        $this->nome = $nome_c;
        $this->cpf = $cpf_c;
        $this->rg = $rg_c;
        
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

    //métodos
	function resumopessoa()
	{
		return "$this->nome , $this->cpf ,  $this->rg , $this->nascimento.";
	}

}

//objetos
$func1 = new Pessoa();
$func1->setNome('maria');
$func1->setCpf(14785236996);
$func1->setRg(63225147);
$func1->setNascimento(02/05/1988);
echo $objFunc1->resumopessoa();