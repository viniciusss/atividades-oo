<?php

class Calculadora
{

  public function calcular(Calculo $calculo)
  {
    echo $calculo->calcular() . '<br>';
  }
}

abstract class Calculo
{
  protected $a;

  protected $b;

  public function __construct($a, $b)
  {
    $this->a = $a;
    $this->b = $b;
  }

  public abstract function calcular();
}

class Soma extends Calculo
{

  public function calcular()
  {
    return $this->a + $this->b;
  }
}

class Divisao extends Calculo
{
  public function __construct($a, $b)
  {
    if( 0 == $b ) {
      echo 'erro numero nao pode ser zero.';
    }
    parent::__construct($a, $b);
  }

  public function calcular()
  {
    return $this->a / $this->b;
  }
}

class Subtracao extends Calculo
{
  public function calcular()
  {
    return $this->a - $this->b;
  }
}

class Multiplicacao extends Calculo
{
  public function calcular()
  {
    return $this->a * $this->b;
  }
}

class Potencia extends Calculo
{
  public function calcular()
  {
    return pow($this->a, $this->b);
  }
}

$calculadora = new Calculadora();

$divisao = new Divisao(10, 5);
$subtracao = new Subtracao(5, 2);

$calculadora->calcular($divisao);
$calculadora->calcular($subtracao);
