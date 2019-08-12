<?php

// While

/*
  Syntax 1

  while (expr)
    stantement
*/

$i = 1;
while ($i <= 10) {
  echo $i++ . '<br>';
}

// Row
echo '<hr>';

/*
  Syntax 2

  while (expre) : 
    stantement
  endwhile  
*/

$a = 1;
while ($a <= 10) :
  echo $a++ . '<br>';
endwhile;
