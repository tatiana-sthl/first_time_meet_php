<?php

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Etape 1: Faire cuire...',
    'author' => 'john.doe@example.com',
    'enable' => true,
];

/*idem
$recipe[title] = 'Cassoulet';
$recipe[recipe] = 'Etape 1: Faire cuire...';
$recipe[author] = 'john.doe@example.com';
$recipe[enable] = true;
];
*/

echo $recipe['author'];

?>