<?php
/*
  OPERADORES ATRIBUICAO

  =
  +=
  -=
  *=
  /=
  .=
  %=
*/
$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

$valorTotal *= .9;

echo $valorTotal;

/*
  OPERADORES ARITMETICOS

  +
  -
  *
  /
  %
  **
*/
$a = 2;
$b = 3;

echo $a + $b; // 3
echo $a - $b; // 1


/*
  OPERADORES COMPARAÇÃO

  >   Maior que
  <   Menor que
  >=  Maior igual
  <=  Menor igual
  ==  igual
  === identico
*/
$a = 55.0;
$b = 55;

var_dump($a > $b); // False
echo '<br />';
var_dump($a < $b); // True
echo '<br />';
var_dump($a == $b); // false
echo '<br />';
var_dump($a !== $b); // True

/*
  OPERADORES LOGICOS

  AND  E
  OR   OU
  XOR  OU Exclusivo
  !    Negação
  &&   E
  ||   OU
*/

var_dump(7 == 7 and 9 > 7); // True
var_dump(7 == 7 and  9 < 7); // False

/*
  OPERADOR SPACESHIP

  <=> Operacoes combinadas
  Retorna 0 se os valores de ambos os lados são iguais.
  Retorna 1 se o valor à esquerda é maior.
  Retorna -1 se o valor à direita é maior.

*/
$v1 = 35;
$v2 = 35;

var_dump($v1 <=> $v2); // Retorna 0

/*
  OPERADORES DE INCREMETO E DECREMENTO

  $a++ Pré-incremento
  $a++ Pos-incremento

  --$a Pre-decremento
  $a-- Pos-decremento

*/

$v3 = 10;

echo $v3++; // 11

/*
  PRECENDENCIA DE OPERADORES

  

*/
