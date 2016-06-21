<?php

include_once 'Conta.php';

class ContaSalario extends Conta
{
  public function __construct($numero, $agencia)
  {
    parent::__construct($numero, $agencia, 500);
  }

  public function getValorLimiteSaque()
  {
    return $this->saldo;
  }
}
