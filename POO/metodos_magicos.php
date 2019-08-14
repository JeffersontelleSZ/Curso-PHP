<?php
// Metodos Magicos
class Endereco
{
  private $logradouro;
  private $numero;
  private $cidade;

  // construct
  public function __construct($a, $b, $c)
  {
    $this->logradouro = $a;
    $this->numero = $b;
    $this->cidade = $c;
  }

  // destruct
  public function __destruct()
  {
    var_dump('DESTRUIU..');
  }

  // toString
  public function __toString()
  {
    return "Meu endereco é $this->logradouro é meu numero é $this->numero e minha cidade é $this->cidade";
  }
}

$meuEndereco = new Endereco('Rua 06', '06', 'Goiania-GO');

echo $meuEndereco;
