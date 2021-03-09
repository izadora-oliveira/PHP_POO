<?php
require_once("mamifero.php");

class Testaranimais extends Mamifero
{
    //método main
    public function main()
    {
        echo $this->dadosmamifero();

    }
}

$obj = new Testaranimais('camelo', '150 centímetros', '4', 'amarelo', 'terra', '2 m/s', 'folhas');

$obj->main();