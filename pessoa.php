<?php

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
    
}

//objetos
$func1 = new Pessoa();
$func1->setNome("");
$func1->setCpf();


?>