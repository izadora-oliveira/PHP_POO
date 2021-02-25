<?php

class Aluno 
{
    public $nome;
    public $matricula;
    public $nota1;
    public $nota2;

    // contrutor da classe
    public function __construct($nome_c, $matricula_c, $nota1_c, $nota2_c)
    {
        $this->nome = $nome_c;
        $this->matricula = $matricula_c;
        $this->nota1 = $nota1_c;
        $this->nota2 = $nota2_c;
        
    }
}