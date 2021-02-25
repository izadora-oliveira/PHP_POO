<?php

class Endereco
{
    public $rua;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $complemento;


    // contrutor da classe
    function __construct($rua, $bairro, $cidade, $estado, $cep, $complemento)
    {
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->complemento = $complemento;
        
    }

    function setRua($rua)
    {
        $this->rua = $rua;
    }
    function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function setEstado($estado)
    {
        $this->estado = $estado;
    }
    function setCep($cep)
    {
        $this->cep = $cep;
    }
    function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }
    function getRua()
    {
        return $this->rua;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function getEstado()
    {
        return $this->estado;
    }
    function getCep()
    {
        return $this->cep;
    }
    function getComplemento()
    {
        return $this->complemento;
    }
}

//métodos
function resumoendereco()
{
    return "$this->rua , $this->bairro , $this->cidade , $this->estado , $this->cep , $this->complemento.";
}

function alterbairro($bairro)
{
    //afetar um atributo do objeto
    $this->bairro = $bairro;
}

function altercidade($cidade)
{
    //afetar um atributo do objeto
    $this->cidade = $cidade;
}
function alterestado($estado)
{
    //afetar um atributo do objeto
    $this->estado = $estado;
}
function altercep($cep)
{
    //afetar um atributo do objeto
    $this->cep = $cep;
}
function altercomplemento($complemento)
{
    //afetar um atributo do objeto
    $this->complemento = $complemento;
}

//objetos
$objFunc1 = new Endereco();
$objFunc1->setRua('B');
$objFunc1->setBairro('Prazeres');
$objFunc1->setCidade('Jaboatão');
$objFunc1->setEstado('Pernambuco');
$objFunc1->setCep('54740711');
$objFunc1->setComplemento('casa');
echo $objFunc1->resumoendereco();