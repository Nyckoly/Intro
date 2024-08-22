<?php

namespace App\Models;

use DateTime;

Class Pessoa {

    private string $nome;
    private string $cpf;
    private DateTime $dataNascimento;




    public function __construct(string $pNome, string $pCpf, DateTime $pDataNascimento){
        $this->setNome($pNome);
        $this->setCpf($pCpf);
        $this->dataNascimento = $pDataNascimento;
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
    * @return DateTime
    */
    public function getDataNascimento(){
    	return $this->dataNascimento->format('d/m/Y');
    }

    public function getIdade(){
        date_default_timezone_set('America/Sao_Paulo');
        $dataAtual = new DateTime(date('d-m-Y'));
        $Diff = $this->dataNascimento->diff($dataAtual);
        return $Diff->y;
    }
    public function exibirMaiorIdade(){
        if($this->getIdade()>= 18){
            $maioridade = "É maior de idade";
        }
        else{
            $maioridade = "É menor de idade";
        }
        return $maioridade;
    }
    public function exibirDadosPessoa(){
        $mensagem = "Pessoa: ". $this->getNome() ."; ". $this->getDataNascimento() . "; ". $this->getCpf() . "; ". $this->getIdade() . "; ". $this->exibirMaiorIdade();
        return $mensagem;
    }

}







?>