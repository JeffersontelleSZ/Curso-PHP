<?php
# Funcoes de Arrays
$users = array();

# Array Push
array_push($users, array(
  'Nome' => 'Jefferson',
  'Idade' => 25
));

array_push($users, array(
  'Nome' => 'Anderson',
  'Idade' => 24
));

echo '<pre>';
print_r($users[1]);
echo '</pre>';

# Array Rand
$names = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");

$keys = array_rand($names, 3);

echo '<pre>';
echo $names[$keys[1]] . "\n";
echo '</pre>';
