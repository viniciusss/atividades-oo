<?php

include_once 'Pessoa.php';

class PessoaFisica extends Pessoa
{
  protected $dataNascimento;

  protected $cpf;

  protected $identidade;


  public function __construct($nome, $endereco, $dataNascimento, $cpf, $identidade)
  {
    parent::__construct($nome, $endereco);
    $this->dataNascimento = $dataNascimento;
    $this->cpf = $cpf;
    $this->identidade = $identidade;
  }

  public function definirConta(ContaSalario $contaSalario)
  {
    $this->conta = $contaSalario;
  }

  public function verPessoa()
  {
    parent::verPessoa();
    echo ' cpf: ' . $this->cpf;
  }
}
