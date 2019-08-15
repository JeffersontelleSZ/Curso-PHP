<?php
// POLIMORFISMO
abstract class Animal
{
  public function falar()
  {
    return 'falar';
  }

  public function mover()
  {
    return 'anda';
  }
}

class Cachorro extends Animal
{
  public function falar()
  {
    return 'Late';
  }
}

class Gato extends Animal
{
  public function falar()
  {
    return 'Mia';
  }
}

class Passaro extends Animal
{
  public function falar()
  {
    return 'Pia';
  }

  public function mover()
  {
    return 'Voa é ' . parent::mover();
  }
}

$pluto = new Cachorro();
echo $pluto->falar() . '<br>';
echo $pluto->mover() . '<br>';

echo '----------------<br>';

$cat = new Gato();
echo $cat->falar() . '<br>';
echo $cat->mover() . '<br>';

echo '----------------<br>';

$piu = new Passaro();
echo $piu->falar() . '<br>';
echo $piu->mover();
