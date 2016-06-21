<?php

include_once 'classes/PessoaFisica.php';
include_once 'classes/PessoaJuridica.php';

echo '<pre>';

$vinicius = new PessoaFisica('vinicius', 'rual tal', '10/05/1993', '144123123', '123');
$bruno = new PessoaFisica('bruno', 'rual tal', '10/05/1994', '12312312322', '144');
$multivix = new PessoaJuridica('multivix', 'sao mateus', '123123131', '123123131', 'Fulano');

$vinicius->verPessoa();
$bruno->verPessoa();
$multivix->verPessoa();

$multivix->contratar($vinicius);
$multivix->contratar($bruno);

echo PHP_EOL . 'Saldo de vinicius: ' . $vinicius->getSaldoConta();
$vinicius->sacar(400);
echo PHP_EOL . 'Novo Saldo de vinicius: ' . $vinicius->getSaldoConta();
$vinicius->depositar(1000);
echo PHP_EOL . 'Novo Saldo de vinicius: ' . $vinicius->getSaldoConta();

echo PHP_EOL . 'Saldo de multivix: ' . $multivix->getSaldoConta();
$multivix->sacar(5500);
echo PHP_EOL . 'Novo Saldo de multivix: ' . $multivix->getSaldoConta();
$multivix->sacar(500);
echo PHP_EOL . 'Novo Saldo de multivix: ' . $multivix->getSaldoConta();
$multivix->depositar(2000);
echo PHP_EOL . 'Novo Saldo de multivix: ' . $multivix->getSaldoConta();
echo PHP_EOL . 'Limite da Multivix é: ' . $multivix->getLimiteChequeEspecial();
echo PHP_EOL . 'Limite de saque da Multivix é: ' . $multivix->getValorLimiteSaque();

var_dump($multivix);
