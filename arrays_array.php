<?php

$recipes = [
    [
        'title' => 'Cassoulet',
        'recipe' => 'Faire cuire...',
        'author' => 'john.doe@example.com',
        'is_enabled' => true,
    ],
    [
        'title' => 'Couscous',
        'recipe' => 'Faire cuire...',
        'author' => 'faa@example.com',
        'is_enabled' => true,
    ],    
    [
        'title' => 'Sandwich',
        'recipe' => 'Faire cuire...',
        'author' => 'foo@example.com',
        'is_enabled' => false,
    ],    
    [
        'title' => 'Salade',
        'recipe' => 'Faire cuire...',
        'author' => 'boo@example.com',
        'is_enabled' => false,
    ],
];

foreach ($recipes as $recipe) {
    echo $recipe['title'] . ' contribué par : ' . $recipe['author'] . PHP_EOL;
}

?>