<?php

class PessoaFisica
{
  protected $nome;

  protected $endereco;

  protected $dataNascimento;

  protected $cpf;

  protected $identidade;

  public function __construct($nome, $endereco, $dataNascimento, $cpf, $identidade)
  {
    $this->nome = strtoupper($nome);
    $this->endereco = trim($endereco);
    $this->dataNascimento = $dataNascimento;
    $this->cpf = $cpf;
    $this->identidade = $identidade;
  }
}

$vinicius = new PessoaFisica('vinicius', 'rual tal', '10/05/1993', '144123123', '123');

class PessoaJuridica
{

  protected $nome;

  protected $endereco;

  protected $cnpj;

  protected $inscricaoEstadual;

  protected $diretor;

  public function __construct($nome, $endereco, $cnpj, $inscricaoEstadual, $diretor)
  {
    $this->nome = strtoupper($nome);
    $this->endereco = $endereco;
    $this->cnpj = $cnpj;
    $this->inscricaoEstadual = $inscricaoEstadual;
    $this->diretor = $diretor;
  }

}

$multivix = new PessoaJuridica('multivix', 'sao mateus', '123123131', '123123131', 'Fulano');

var_dump($vinicius);
var_dump($multivix);
