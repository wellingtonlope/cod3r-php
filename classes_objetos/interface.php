<div class="titulo">Interface</div>

<?php
interface Animal
{
    public function respirar();
}

interface Mamifero
{
    function mamar();
}

interface Canino extends Animal, Mamifero
{
    public function latir(): string;
    function correr();
}

interface Felino
{
    function correr();
}

class Cachorro implements Canino
{
    public function respirar()
    {
        return "Irei usar oxigênio!";
    }

    public function latir(): string
    {
        return "au au";
    }

    public function mamar()
    {
        return 'Irei usar leite!';
    }

    public function correr()
    {
        return 'vrunnnnn!';
    }
}

$animal = new Cachorro();
echo $animal->respirar() . '<br>';
echo $animal->latir() . '<br>';
echo $animal->mamar() . '<br>';

echo '<br>';
var_dump($animal);

echo '<br>';
var_dump($animal instanceof Cachorro);
var_dump($animal instanceof Canino);
var_dump($animal instanceof Mamifero);
var_dump($animal instanceof Animal);
var_dump($animal instanceof Felino);

echo 'Fim!';
