<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome" => "Jose", // o primeiro tem preferência
    "idade" => 28
];

$dados2 = [
    "nome" => "Maria",
    "naturalidade" => "Fortaleza"
];

$dados2["endereco"] = "Rua A";

$dadosCommpletos = $dados1 + $dados2;
print_r($dadosCommpletos);

echo '<br>' . is_array($dadosCommpletos);
echo '<br>' . count($dadosCommpletos);

$indice = array_rand($dadosCommpletos);
echo "<br>$indice = $dadosCommpletos[$indice]";
echo "<br>{$dadosCommpletos['idade']}";
echo " ${dadosCommpletos['idade']}";

unset($dadosCommpletos["nome"]); // excluir um item do array
echo '<br>';
print_r($dadosCommpletos);

unset($dadosCommpletos);
echo '<br>';
var_dump($dadosCommpletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$decimais = $pares + $impares;
echo '<br>';
print_r($decimais);

$decimais = array_merge($pares, $impares);
echo '<br>';
print_r($decimais);

sort($decimais); // altera o array
echo '<br>';
print_r($decimais);
