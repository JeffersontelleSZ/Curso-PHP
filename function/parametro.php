<?php
# PARAMETER VALUE
$a = 10;

function trocarValor(&$b)
{
  $b += 50;
  return $b;
}

echo $a;
echo '<br>';
echo trocarValor($a);
echo '<br>';
echo $a;

echo '<hr>';

# PARAMETER REFERENCE
$pessoa = [
  'Nome' => 'Jefferson',
  'Idade' => 25
];

foreach ($pessoa as &$value) {

  if (gettype($value) === 'integer') $value += 10;
  echo $value . '<br>';
}

print_r($pessoa);
