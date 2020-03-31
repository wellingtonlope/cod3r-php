<div class="titulo">Require & Return</div>

<?php
$valorRetorno = require 'return_usado.php';
echo $valorRetorno . '<br>';
echo $variavelRetornada . '<br>';

echo __DIR__ . '<br>';

$valorRetorno2 = require __DIR__ . "/return_nao_usado.php";
// var_dump($valorRetorno2);
echo $valorRetorno2 . '<br>'; // 1 para carregado e 0 para não carregado(no caso do include)
echo $variavelDeclarada . '<br>';
