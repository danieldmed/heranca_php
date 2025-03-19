<?php

class Aluno {

    private $nome;
    private $idade;

    function __construct($nome) {
        $this -> nome = $nome;
    }

    function set_nome($n) {
        $this -> nome = $n;
    }

    function get_nome() {
        return $this -> nome;
    }

}

?>