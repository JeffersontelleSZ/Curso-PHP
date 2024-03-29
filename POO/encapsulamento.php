<?php
// ENCAPSULAMENTO
class Pessoa
{
  public $nome = 'Jefferson Teles';
  protected $idade = '25';
  private $senha = '123456';

  public function verDados()
  {
    echo $this->nome . '<br>';
    echo $this->idade . '<br>';
    echo $this->senha;
  }
}

// EXTENDS PESSOA
class Programador extends Pessoa
{
  public function verDados()
  {
    echo get_class($this) . '<br/>';

    echo $this->nome . '<br>';
    echo $this->idade . '<br>';
    echo $this->senha;
  }
}

$objeto = new Programador();
$objeto->verDados();
