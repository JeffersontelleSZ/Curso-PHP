<?php
# Save Path
require_once('config.php');

echo session_save_path();

echo '<br>';

# Session status - Retorna o status da nossa session.
echo session_status();

echo '<br>';

switch (session_status()) {
  case PHP_SESSION_DISABLED:
    echo 'as sessões estiverem desabilitadas.';
    break;

  case PHP_SESSION_NONE:
    echo 'as sessões estiverem habilitadas, mas nenhuma existir.';
    break;

  case PHP_SESSION_ACTIVE:
    echo 'as sessões estiverem habilitadas, e uma existir.';
    break;
}
