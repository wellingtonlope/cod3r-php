<?php namespace contexto;

?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante1 = 123;
define('constante2', 234); // sem o contexto ela vai para o contexto raiz
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
// echo \constante2 . '<br>'; // acessar valor da raiz caso tenha conflito
echo constante2 . '<br>';
// echo contexto\constante3 . '<br>'; // tenta acessar de forma relativa
echo \contexto\constante3 . '<br>'; //
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b)
{
    return $a + $b;
}

echo \contexto\soma(1, 2) . '<br>';
echo soma(1, 2) . '<br>';

function strpos($str, $texto)
{
    echo "Buscando o txto '$texto' em '$str'<br>";
    return 1;
}

echo strpos("Texto genérico para busca", "busca") . '<br>';
echo \strpos("Texto genérico para busca", "busca") . '<br>';
