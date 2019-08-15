<?php
// INTERFACE
interface Veiculo
{
  public function acelerar($velocidade);
  public function freiar($velocidade);
  public function trocarMarcha($marcha);
}

class Honda implements Veiculo
{
  public function acelerar($velocidade)
  {
    echo 'A velocidade do seu veiculo é de ' . $velocidade . ' km/h';
  }

  public function freiar($velocidade)
  {
    echo 'O veiculo freio na velocidade ' . $velocidade . ' km/h';
  }

  public function trocarMarcha($marcha)
  {
    echo 'O veiculo trocou para a marcha ' . $marcha;
  }
}

$carro = new Honda();
$carro->acelerar('120');
