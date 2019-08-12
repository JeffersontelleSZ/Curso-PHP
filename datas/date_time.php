<?php
# DATE(), TIME();
echo date('d/m/Y h:i:s', 1565238302);

echo '<br>';

echo time();

echo '<hr>';

# strtotime
$d = strtotime('+2 day');

echo date('d/m/Y', $d);
