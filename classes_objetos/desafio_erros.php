<div class="titulo">Desafio Erros</div>

<?php
interface Template
{
    public function metodo1();
    public function metodo2($parametro);
}

abstract class ClasseAbstrata implements Template
{
    public function metodo3()
    {
        echo "Estou funcionando<br>";
    }

    public function metodo1()
    {
    }
}

class Classe extends ClasseAbstrata
{
    public function _construct($parametro)
    {

    }

    public function metodo2($parametro)
    {
    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();
