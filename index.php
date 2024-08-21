<?php

require __DIR__ . "/models/Produto.php";
require __DIR__ . "/models/Pessoa.php";

use App\Models\{Produto,Pessoa};


// OO - Classes, Objetos, Construtores, Getters and Setters, Atributos, Modificadores

$produto1 = new Produto(); //criando o objeto | instanciando a classe
$produto1->setNome("Queijo");
$produto1->setValor(20.00);

$produto2 = new Produto(); //criando o objeto | instanciando a classe
$produto2->setNome("Coca Cola");
$produto2->setValor(10.50);

try {
    $produto2->setValor(-1000); //código que pode causar erro.
} catch (\Throwable $th) {
    echo $th->getMessage(); //mensagem de erro caso algo inesperado ocorra.
}


$cliente = new Pessoa("Juca","55599988877",41);




echo "O valor do produto ". $produto1->getNome() ." é de R$" . $produto1->getValor().".<br>";
echo "O valor do produto ". $produto2->getNome() ." é R$" . $produto2->getValor().".<br>";
echo "Pessoa 1: ". $cliente->getNome() ."; ". $cliente->getIdade() . "; ". $cliente->getCpf();










