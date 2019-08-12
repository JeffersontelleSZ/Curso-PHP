<?php
// STRING

$nome = 'Jefferson';
$sobrenome = 'Teles';

echo "Olá meu nome é $nome e meu sobrenome é $sobrenome"; // Concatenacao com aspas duplas
echo 'Olá meu nome é' . $nome . ' e meu sobrenome é ' . $sobrenome; // Concatenacao com aspas simples

// FUNCAO DE STRINGS
$nome2 = 'Jefferson Teles';

// Uppercase - Caracteres Maiusculos
echo strtoupper($nome2); // JEFFERSON TELES

// Lowercase - Caracteres Minusculos
echo strtolower($nome2); // jefferson teles

// ucfirst - Primeiro Caracter Maiusculo
echo ucfisrt($nome2);    // Jefferson teles

// ucwords - Primeiro caracters de todas as palavras maisculo
echo ucwords($nome2);    // Jefferson Teles

// Replace - Substitui todas as ocorrências da string de procura com a string de substituição
echo str_replace('e', '3', $nome2); // J3ff3rson t3l3s

// strpos - Encontra a posição da primeira ocorrência de uma string
$frase = "Tudo na vida passa";
$q = strpos($frase, 'vida');
var_dump(q); // Posicao 7

// strlen - Retorna o tamanho da string
$nome3 = 'Anderson';
var_dump(strlen($nome3)); // 7 caracteres
