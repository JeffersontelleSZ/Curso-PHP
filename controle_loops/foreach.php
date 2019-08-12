<?php

// Foreach (Para Cada) - O construtor foreach fornece uma maneira fácil de iterar sobre arrays.

/*
  Syntax

  foreach (array_expression as $value)
    statement
*/

$frutas = array('Banana', 'Uva', 'Goiaba', 'Cereja');

foreach ($frutas as $fruta) {
  echo $fruta . '<br>';
  echo '<hr>';
}

if (isset($_GET)) {
  foreach ($_POST as $key => $value) {
    echo 'Nome do campo: ' . $key . '<br>';

    echo 'Nome do campo: ' . $value;

    echo '<hr>';
  }
}
?>

<form method="POST">
  <input type="text" name="nome">
  <input type="text" name="nascimento">
  <input type="submit" value="OK">
</form>