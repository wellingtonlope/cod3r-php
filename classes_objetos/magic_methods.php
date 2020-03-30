<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa
{
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo 'E morreu!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar()
    {
        echo $this . "<br>";
    }

    public function __get($atrib)
    {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor)
    {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params)
    {
        echo "Tentando executar o método '$metodo'.";
        echo "<br>, com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40); // __construct
$pessoa->apresentar();
echo $pessoa . '<br>'; // chamando o __toString
$pessoa->nome = 'Reinaldo';
$pessoa->apresentar();

$pessoa->nomeCompleto; // atributo não disponivel, chama o método __get
$pessoa->nomeCompleto = 'Muito legal!!!'; // atributo não disponivel, chama o método __set

$pessoa->exec(1, 'teste', true, [1, 2, 3]); // método não declardo, chama o método __call

echo '<br>';
$pessoa = null; // __destruct
