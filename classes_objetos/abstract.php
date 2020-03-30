<div class="titulo">Classe Abstrata</div>

<?php
abstract class Abstrata
{
    abstract public function metodo1();
    abstract protected function metodo2($parametro);
}

abstract class FilhaAbstrata extends Abstrata
{
    public function metodo1()
    {
        echo "Executando método 1<br>";
    }
    abstract public function metodo3();
}

class Concreta extends FilhaAbstrata
{
    public function metodo1()
    {
        echo "Executando método 1 extendido <br>";
        parent::metodo1();
    }

    protected function metodo2($parametro) // não pode diminuir nivel de visibilidade

    {
        echo "Executando método 2, com parametro $parametro<br>";
    }

    public function metodo3()
    {
        echo "Executando método 3 <br>";
        $this->metodo2('interno');
    }

}

$c = new Concreta();
$c->metodo1();
// $c->metodo2('externo'); // protegido
$c->metodo3();

echo '<br>';
var_dump($c);

echo '<br>';
var_dump($c instanceof Concreta);
var_dump($c instanceof FilhaAbstrata);
var_dump($c instanceof Abstrata);
