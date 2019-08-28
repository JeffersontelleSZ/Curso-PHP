<?php

$dns = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$senha = '';

// Trantando erros com PDOException
try {
  $conn = new PDO($dns, $user, $senha);

  // Executar estrucoes SQL
  $query = '
    CREATE TABLE tb_usuarios (
      id int not null primary key auto_increment,
      nome varchar(50) not null,
      email varchar(100) not null,
      senha varchar(32) not null
    )
  ';

  $return = $conn->exec($query);
  echo $return;

  $query = '
      DELETE FROM tb_usuarios
  ';

  $return = $conn->exec($query);
  echo $return;
} catch (PDOException $err) {
  echo 'Error: ' . $err->getCode() . ' Mensagem: ' . $err->getMessage();
}
