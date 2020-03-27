<div class="titulo">Closure & Callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b)
{
    return $a + $b;
}

echo $soma1(2, 3) . ' ';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . ' ';
echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);
echo '<br>';

function executar($a, $b, $op, Closure $funcao)
{
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado <br>";
}

executar(2, 3, '+', $soma1); // callable closure
// executar(2, 3, '+', soma2); // callable !closure
