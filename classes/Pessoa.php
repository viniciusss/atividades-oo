<?php

abstract class Pessoa
{
  protected $nome;

  protected $endereco;

  protected $conta;

  public function __construct($nome, $endereco)
  {
      $this->nome = strtoupper($nome);
      $this->endereco = trim($endereco);
  }

  public function verPessoa()
  {
    echo  PHP_EOL . 'Nome da pessoa é: ' . $this->nome;
  }

  public function sacar($valor)
  {
    $this->conta->sacar($valor);
  }

  public function depositar($valor)
  {
    $this->conta->depositar($valor);
  }

  public function getSaldoConta()
  {
    return $this->conta->getSaldo();
  }

  public function getValorLimiteSaque()
  {
    return $this->conta->getValorLimiteSaque();
  }
}
