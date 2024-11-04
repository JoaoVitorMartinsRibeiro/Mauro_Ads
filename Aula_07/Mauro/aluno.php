<?php

    class Aluno {
        public $nome;
        public $dtNasci;
        public $serie;
        public $sexo;     
        
        $idade;
        

        
    public function __construct($nome, $sexo, $dtNasci, $serie) {
        $this->nome = $nome;
        $this->serie = $serie;
        $this->dtNasci = $dtNasci;
        $this-> sexo = $sexo;
    }
        
    //$usuario = new Usuario("Fulano de Tal", 30, "1970-01-01", "123456");

    $aluno = new aluno("Joao Vitor", 'M', "2005-07-07");
    
    }

?>
