<?php

abstract class Conta
{
  protected $numero;

  protected $agencia;

  protected $saldo;

  public function __construct($numero, $agencia, $saldo)
  {
    $this->numero = $numero;
    $this->agencia = $agencia;
    $this->saldo = $saldo;
  }

  public function sacar($valor)
  {
      if( $valor > $this->getValorLimiteSaque() ) {
        echo PHP_EOL . 'nao pode realizar saque.' . PHP_EOL;
        return false;
      }

      $this->saldo -= $valor;
  }

  public function depositar($valor)
  {
      $this->saldo += $valor;
  }

  public function getSaldo()
  {
    return $this->saldo;
  }

  protected abstract function getValorLimiteSaque();
}
