<?php
// HERANÇA
class Documento
{
  private $numero;

  public function getNumero()
  {
    return $this->numero;
  }

  public function setNumero($n)
  {
    $this->numero = $n;
  }
}

// CPF EXTENDS
class CPF extends Documento
{

  public function validar(): bool
  {
    $numeroCpf = $this->getNumero();

    return true;
  }
}

$doc = new CPF();
$doc->setNumero('04208165189');
var_dump($doc->validar());
echo '<br>';
echo $doc->getNumero();
