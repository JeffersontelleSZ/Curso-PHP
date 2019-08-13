<?php
## encapsulamento

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

$objeto = new Pessoa();
$objeto->verDados();
