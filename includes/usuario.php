<?php
require_once 'pessoa.php';

class Usuario extends Pessoa
{
    public $login;

    public function __construct($nome, $idade, $login)
    {
        parent::__construct($nome, $idade);
        $this->login = $login;
    }

    public function apresentar()
    {
        $login = "@{$this->login}: ";
        return $login . parent::apresentar();
    }
}
