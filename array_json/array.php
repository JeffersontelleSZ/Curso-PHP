<?php

# Array Simples
$fruta = array('Laranja', 'Maça', 'Uva', 'Goiaba');

echo '<pre>';
print_r($fruta);
echo '</pre>';

echo '<hr>';

# Array Bidimensional
$frutas[0][1] = 'Banana';
$frutas[0][2] = 'Uva';
$frutas[0][3] = 'Laranja';
$frutas[0][4] = 'Goiaba';
$frutas[0][5] = 'Maça';

$users[1][1] = 'Jefferson';
$users[1][2] = 'Anderson';
$users[1][3] = 'Maria';
$users[1][4] = 'Nathy';
$users[1][5] = 'Filipe';

echo $frutas[0][3] . '<br>'; # Laranja

# Recupera o ultimo array passado.
echo end($users[1]);
