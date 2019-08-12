<!-- Tipos de dados -->
<?php
// BÁSICO
$nome = 'Udemy';
$site = 'www.udemy.com';

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

// COMPOSTO
$frutas = array('Abacaxi', 'Laranja', 'Manga');
echo $frutas[2]; # Recupera Manga

$nascimento = new DateTime();

//var_dump($nascimento);

// ESPECIAIS
$arquivo = fopen('variaveis.php', 'r');
//var_dump($arquivo);

$nulo = NULL;
$vazio = '';
?>