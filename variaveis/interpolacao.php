<div class="titulo">Interpolação</div>

<?php
$numero = 10;
echo $numero;
echo '<br> $numero';
echo "<br> $numero";

$texto = "A sua nota é: $numero";
echo "<br>$texto";

$objeto = 'caneta';
//echo "<br>Eu tenho 5 $objetos"; //error
echo "<br>Eu tenho 5 {$objeto}s.";
echo "<br>Eu tenho 5 { $objeto}s mas perdi {$objeto }s.";
echo "<br>";
//echo "{$numero + 1}"; // error
