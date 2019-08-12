<?php

session_id('h2i1gqfabbtl8h9hat9us9ct6n');

require_once('config.php');

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
