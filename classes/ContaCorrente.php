<?php

include_once 'Conta.php';

class ContaCorrente extends Conta
{

  protected $limiteChequeEspecial;

  protected $valorEmprestimoPreAprovado;

  public function __construct($numero, $agencia, $saldo, $limiteChequeEspecial, $valorEmprestimoPreAprovado)
  {
    parent::__construct($numero, $agencia, $saldo);
    $this->limiteChequeEspecial = $limiteChequeEspecial;
    $this->valorEmprestimoPreAprovado = $valorEmprestimoPreAprovado;
  }

  public function getValorLimiteSaque()
  {
    return $this->saldo + $this->limiteChequeEspecial;
  }

  public function getLimiteChequeEspecial()
  {
    return $this->limiteChequeEspecial;
  }
}
