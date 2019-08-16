<?php

namespace Cliente;

class Cadastro extends \Cadastro
{
  public function registarVenda()
  {
    echo 'Foi registrada uma venda para o cliente ' . $this->getNome();
  }
}
