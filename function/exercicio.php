<?php

function producao($user, $salario, $vendas, $porcentagem)
{

  $comissao = $vendas * $porcentagem;
  $valorTotal = $salario + $comissao;

  return "$user, seu salario e de $valorTotal";
}

echo producao('Maria', 1600, 600, 0.10);
echo '<br>';
echo producao('Jefferson', 2600, 200, 0.10);
