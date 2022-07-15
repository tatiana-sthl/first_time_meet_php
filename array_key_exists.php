<?php

$recipe = [
    'title' => 'Cassoulet',
    'recipe' => 'Faire cuire...',
    'author' => 'john.doe@example.com',
];

if (array_key_exists('author', $recipe)) {
    echo 'La clé "author" se trouve dans la recette !';
} else {
    echo 'La clé recherchée ne se trouve pas dans la recette.';
}

?>