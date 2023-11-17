<?php
include_once __DIR__ . "/../vendor/autoload.php";

use App\model\Gato;

$meuGato = new Gato("Salém", 2);

echo $meuGato->nome;
echo $meuGato->idade;

?>