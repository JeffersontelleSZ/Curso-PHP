<?php
// Switch Case
$diaSemana = date('w');

switch ($diaSemana) {
  case 1: {
      echo 'Segunda';
    }
    break;

  case 2: {
      echo 'Terça';
    }
    break;

  case 3: {
      echo 'Quarta';
    }
    break;

  case 4: {
      echo 'Quinta';
    }
    break;

  case 5: {
      echo 'Sexta';
    }
    break;

  default: {
      echo 'Dia nao encontrado';
    }
}
