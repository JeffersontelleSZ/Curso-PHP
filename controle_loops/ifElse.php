<?php
// If e Else
$minhaIdade = 23;

$idadeCrianca = 11;
$idadeAdolecente = 18;
$idadeAdulto = 25;

if ($minhaIdade < $idadeCrianca) {
  echo 'Criança';
} else if ($minhaIdade < $idadeAdolecente) {
  echo 'Adolecente';
} else if ($minhaIdade < $idadeAdulto) {
  echo 'Adulto';
} else {
  echo 'Idoso';
}

echo '<br>';

// Operador Ternario
echo ($minhaIdade < $idadeAdulto) ? "Menor de Idade" : "Maior de Idade";
