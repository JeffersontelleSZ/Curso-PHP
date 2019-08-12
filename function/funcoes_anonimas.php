<?php
# FUNCOES ANONIMAS

function teste($callback)
{
  $callback();
};

teste(function () {
  echo 'Teste Ok!!!' . '<br>';
});

## Teste 2

$fn = function ($a) {
  var_dump($a);
};

$fn('Oi');
