<?php

namespace resource\USR;

class User{
    private $nome;
    private $idade;
    private $apelido;

    public function __construct($nome, $idade, $apelido)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->apelido = $apelido;
    }

    public function __toString()
    {
        return "Nome: ". $this->nome."<br>Idade: ".$this->idade."<br>Apelido: ".$this->apelido;
    }
}

?>