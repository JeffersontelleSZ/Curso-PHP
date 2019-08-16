<?php
// Configuracao do autoload
spl_autoload_register(function ($nomeClasse) {
  $dirClass = 'class';
  $filename = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

  // Vereficação se o arquivo existe
  if (file_exists($filename)) {
    require_once($filename);
  }
});
