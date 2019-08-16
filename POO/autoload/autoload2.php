<?php
function incluirClasse($nomeClasse)
{
  if (file_exists($nomeClasse . ".php") === true) {
    require_once("$nomeClasse.php");
  }
}

// Passando apenas o nome da funcao, caso os arquivos estejao todos no mesmo diretorio
spl_autoload_register("incluirClasse");

// Passando como uma funcao anonima, caso os arquivos estejam em pastas
spl_autoload_register(function ($nomeClasse) {

  if (file_exists("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true) {
    require_once("abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
  }
});

$carro = new Honda();
$carro->acelerar(120);
