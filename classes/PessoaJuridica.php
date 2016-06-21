<?php

include_once 'Pessoa.php';
include_once 'ContaSalario.php';
include_once 'ContaCorrente.php';

class PessoaJuridica extends Pessoa
{
  protected $cnpj;

  protected $inscricaoEstadual;

  protected $diretor;

  protected $funcionarios = [];

  public function __construct($nome, $endereco, $cnpj, $inscricaoEstadual, $diretor)
  {
    parent::__construct($nome, $endereco);
    $this->cnpj = $cnpj;
    $this->inscricaoEstadual = $inscricaoEstadual;
    $this->diretor = $diretor;
    $this->conta = new ContaCorrente(123, 1, 5000, 1000, 100000);
  }

  public function contratar(PessoaFisica $funcionario)
  {
    $contaSalario = new ContaSalario('12', '1223');
    $funcionario->definirConta($contaSalario);
    $this->funcionarios[] = $funcionario;
  }

  public function getLimiteChequeEspecial()
  {
    return $this->conta->getLimiteChequeEspecial();
  }

}
