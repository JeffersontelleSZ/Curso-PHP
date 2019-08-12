<?php
# DECLARAÇÃO DE TIPOS ESCALARES

function soma(int ...$valores)
{
  return array_sum($valores);
}

echo soma(2, 3);
echo '<br>';

echo soma(6, 6);

echo '<hr>';

# ALTERAR O TIPO DE VALORES

function soma2(int ...$valores2)
{

  return array_sum($valores2);
}

echo var_dump(soma2(10, 20));
echo '<br>';
echo soma2(50, 60);
