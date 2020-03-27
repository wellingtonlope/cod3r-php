<div class="titulo">Construtor e Destrutor</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($novoNome, $idade = 18)
    {
        echo 'Construtor invocado! <br>';
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo 'E morreu!<br>';
    }

    public function apresentar()
    {
        return "{$this->nome}, {$this->idade} anos";
    }
}

$pessoaA = new Pessoa('Rebeca Maria', 40);
echo $pessoaA->apresentar() . '<br>';
unset($pessoaA);

$pessoaB = new Pessoa('João Pedro');
echo $pessoaB->apresentar() . '<br>';
$pessoaB = null;
// $pessoa = new Pessoa(); // Problema
