<?php

class Endereco
{
    public $rua;
    public $bairro;
    public $cidade;
    public $estado;
    public $cep;
    public $complemento;

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

?>