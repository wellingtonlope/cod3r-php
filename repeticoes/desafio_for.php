<div class="titulo">Desafio For</div>

<!--
    #
    ##
    ###
    ####
    #####
    1) Pode usar incremento $i++
    2) Não pode usar incremento $i++
 -->

<?php
for ($i = 1; $i <= 5; $i++) {
    echo str_repeat('#', $i) . "<br>";
}

echo "<hr>";

for ($i = '#'; $i != '######'; $i .= '#') {
    echo "$i<br>";
}
