<?php
## HERANÇA
class Pai
{
  public $nome = 'Joao';
  public $sobrenome = 'Teles';
  private $idade = 45;

  public function dados()
  {
    echo $this->nome . '<br>';
    echo $this->sobrenome . '<br>';
    echo $this->idade;
  }
}

class Filho extends Pai
{
  public $nome = 'Jeff';

  public function dados()
  {
    echo $this->nome . '<br>';
    echo $this->sobrenome . '<br>';
    echo $this->idade;
  }
}

$pessoa = new Filho();
echo $pessoa->dados();
