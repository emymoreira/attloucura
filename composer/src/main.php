<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Gato;

$meuGato = new Gato("Salém", 2);

echo $meuGato->nome;
echo "\n";
echo $meuGato->idade . "<br>";

$meuGato = new Gato("Naner", 5);

echo $meuGato->nome;
echo "\n";
echo $meuGato->idade . "<br>";
?>