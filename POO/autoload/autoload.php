<?php
function __autoload($nomeClasse)
{
  require_once("$nomeClasse.php");
}


$carro = new Honda();
$carro->acelerar(80);
