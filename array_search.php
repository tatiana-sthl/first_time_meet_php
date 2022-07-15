<?php

$users = [
    'Mathieu Nebra',
    'Mickaël Andrieu',
    'Laurène Castor',
];

$positionMathieu = array_search('Mathieu Nebra', $users);
echo '"Mathieu" se trouve en position ' . $positionMathieu . '<br>';

$positionLaurène = array_search('Laurène Castor', $users);
echo '"Laurène" se trouve en position ' . $positionLaurène . '<br>';

?>