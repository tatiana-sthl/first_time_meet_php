<?php

$recipe = 'Etape 1 : des flageolets ! Etape 2 : de la saucisse toulousaine';
$length = strlen($recipe);

echo 'La phrase ci-dessous comporte ' . $length . ' caractères :' . '<br>' . $recipe . '<br>';

echo str_replace('c', 'C', "le cassoulet c'est très bon");

?>