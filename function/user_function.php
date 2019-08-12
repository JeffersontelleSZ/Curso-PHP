<?php
# USER FUNCTION
$user = 'Maria';

function welcome()
{
  global $user;
  return "Olá, $user <br>";
}

echo welcome();

# FUNCTION PARAMENTER
function salario($valor)
{
  return $valor;
}

echo 'Seu salario é ' . (salario(998.00) * 3); #2994
