<?php

class Usuario {

    private $nome;
    private $sobrenome;
    private $idade;

    public function setNome($n) {
        $this->nome = $n;
    }
    public function setSobrenome($n) {
        $this->sobrenome = $n;
    }
    public function setIdade($n) {
        $this->idade = $n;
    }
    public function getNomeCompleto() {
        return $this->nome.' '.$this->sobrenome;
    }
    public function getIdade($string = false) {
        if ($string == true) {
            return $this->idade.' anos';
        }
        return $this->idade;
    }

}