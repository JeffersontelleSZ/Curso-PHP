<?php
$users = array();

array_push($users, array(
  'Nome' => 'Jefferson',
  'Idade' => 25
));

array_push($users, array(
  'Nome' => 'Anderson',
  'Idade' => 24
));

# Converter um array em JSON
echo json_encode($users);
echo '<br>';

# Converter um JSON em Array
$json = '[{"Nome":"Jefferson","Idade":25},{"Nome":"Anderson","Idade":24}]';

$data = json_decode($json, true); # Passar (true), se nao o JSON retorna um objeto.

echo '<pre>';
var_dump($data);
echo '</pre>';
