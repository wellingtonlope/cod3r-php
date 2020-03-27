<div class="titulo">Map & Filter</div>

<?php
$notas = [5.8, 7.3, 9.8, 6.7];

$notasFinais1 = [];
foreach ($notas as $nota) {
    $notasFinais1[] = round($nota);
}
print_r($notasFinais1);
echo '<br>';

$notasFinais2 = array_map(round, $notas);
print_r($notasFinais2);
echo '<br>';

$apenasOsAprovas1 = [];
foreach ($notas as $nota) {
    if ($nota >= 7) {
        $apenasOsAprovas1[] = $nota;
    }
}
print_r($apenasOsAprovas1);
echo '<br>';

$aprovados = function ($nota) {
    return $nota >= 7;
};
$apenasOsAprovas2 = array_filter($notas, $aprovados);
print_r($apenasOsAprovas2);
echo '<br>';

$calculoLegal = function ($nota) {
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
};

$notasFinais3 = array_map($calculoLegal, $notas);
print_r($notasFinais3);
