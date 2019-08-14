<?php
// Class
class Pessoa
{
  // Atributo
  public $nome;
  public $idade;

  // Método
  public function falar()
  {
    return "Meu nome é $this->nome e tenho $this->idade";
  }
}

// Chamando nossa class
$pessoa = new Pessoa();
$pessoa->nome = 'Jefferson Teles';
$pessoa->idade = 25;
echo $pessoa->falar();
