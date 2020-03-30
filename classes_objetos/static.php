<div class="titulo">Membros Estáticos</div>

<?php
class A
{
    public $naoStatic = 'Variável de instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA()
    {
        echo "Não estático = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estático = {$this->static}<br>";
        // Tentativa 2
        // echo "Estático = {self::$static}<br>";
        // Tentativa 3
        echo "Estático = " . self::$static . "<br>";
    }

    public static function mostrarStaticA()
    {
        // echo "Não estático = {$this->naoStatic}<br>";
        echo "Estático = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal

echo '<br>';
echo A::$static . "<br>"; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Alterado membro de classe!';
echo A::$static . "<br>"; // acessar diretamente pela classe

$objetoA->mostrarStaticA(); // não é a forma ideal
