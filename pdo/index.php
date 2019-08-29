<?php

if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {
  $dns = 'mysql:host=localhost;dbname=php_com_pdo';
  $user = 'root';
  $senha = '';

  try {
    $conn = new PDO($dns, $user, $senha);

    $query = "select * from tb_usuarios where";
    $query .= " email = :usuario ";
    $query .= " AND senha = :senha ";

    $stmt = $conn->prepare($query);

    $stmt->bindValue(':usuario', $_POST['usuario']);
    $stmt->bindValue(':senha', $_POST['senha']);

    $stmt->execute();

    $usuario = $stmt->fetch();

    echo '<pre>';
    print_r($usuario);
    echo '</pre>';
  } catch (PDOException $err) {
    echo 'Error: ' . $err->getCode() . ' Mensagem: ' . $err->getMessage();
  }
}

?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>

<body>

  <section class="main-form">
    <form action="index.php" method="POST">
      <input type="text" name="usuario" placeholder="Úsuario">
      <br>
      <input type="password" name="senha" placeholder="Senha">
      <br>
      <button type="submit">Entrar</button>
    </form>
  </section>

</body>

</html>