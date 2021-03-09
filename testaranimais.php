<?php
require_once("mamifero.php");
require_once("peixe.php");

class Testaranimais extends Mamifero
{
    //método main
    public function main()
    {
        echo $this->dadosmamifero();

    }
}

$mamifero = new Mamifero('camelo', '150 centímetros', '4', 'amarelo', 'terra', '2 m/s', 'folhas e frutas');
$mamifero->main();