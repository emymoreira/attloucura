<?php

namespace App\model;

class Gato {
    public  $nome;
    public  $idade;


    function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;

    }
}
?>