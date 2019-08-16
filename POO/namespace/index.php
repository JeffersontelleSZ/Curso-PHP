<?php
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Jefferson Teles');
$cad->setEmail('jefferson@gmail.com');
$cad->setSenha('123456');

$cad->registarVenda();
