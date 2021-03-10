<?php
require_once("mamifero.php");
require_once("peixe.php");

class Testaranimais
{
    //método main
    public function main()
    {

        $mamifero = new Mamifero('camelo', '150 centímetros', '4', 'amarelo', 'terra', '2 m/s');
        $mamifero->dadosmamifero();

        echo "<br/>";
        echo "<br/>";
        
        $peixe = new Peixe('tubarão', '300 centímetros', '0', 'cizento', 'mar', '1.5 m/s', 'barbatanas e cauda');
        $peixe->dadospeixe();

    }
}

$obj = new Testaranimais();
$obj->main();