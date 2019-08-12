<?php
// Escopo Global
$nome = 'Jefferson';

function teste()
{
  // Escopo Local
  global $nome;
  echo $nome;
}

function teste2()
{
  $nome = 'Anderson'; #Nao interfere na outra variavel nome
  global $nome; # Pega a variavel do escopo global
  echo $nome . " estamos usando o teste 2 agora";
}

teste();
echo '<br />';
teste2();
