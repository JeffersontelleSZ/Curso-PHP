<?php

$dns = 'mysql:host=localhost;dbname=php_com_pdo';
$user = 'root';
$senha = '';

// Trantando erros com PDOException
try {
  $conn = new PDO($dns, $user, $senha);

  // Executar estrucoes SQL
  $query = '
    SELECT * FROM tb_usuarios
  ';

  $stmt = $conn->query($query);
  $list_user = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach ($list_user as $key => $value) {
    print_r($value['nome']);
    echo '<hr>';
  }

  // echo '<pre>';
  // print_r($user);
  // echo '</pre>';

  // echo $user['email'];
} catch (PDOException $err) {
  echo 'Error: ' . $err->getCode() . ' Mensagem: ' . $err->getMessage();
}
