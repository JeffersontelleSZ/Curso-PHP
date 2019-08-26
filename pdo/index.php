<?php

$dns = 'mysql:host=localhost;dbname=xphp_com_pdo';
$user = 'root';
$senha = '';

// Trantando erros com PDOException
try {
  $conn = new PDO($dns, $user, $senha);
} catch (PDOException $err) {
  echo 'Error: ' . $err->getCode() . ' Mensagem: ' . $err->getMessage();
}
