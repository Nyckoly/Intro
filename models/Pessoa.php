<?php

namespace App\Models;
Class Pessoa {

    private string $nome;
    private string $cpf;
    private int $idade;





    public function __construct(string $pNome, string $pCpf, int $pIdade){
        $this->setNome($pNome);
        $this->setCpf($pCpf);
        $this->setIdade($pIdade);
    }

    /**
    * @return string
    */
    public function getNome(): string {
    	return $this->nome;
    }

    /**
    * @param string $nome
    */
    public function setNome(string $nome): void {
    	$this->nome = $nome;
    }

    /**
    * @return string
    */
    public function getCpf(): string {
    	return $this->cpf;
    }

    /**
    * @param string $cpf
    */
    private function setCpf(string $cpf): void {
    	$this->cpf = $cpf;
    }

    /**
    * @return int
    */
    public function getIdade(): int {
    	return $this->idade;
    }

    /**
    * @param int $idade
    */
    public function setIdade(int $idade): void {
    	$this->idade = $idade;
    }
}







?>