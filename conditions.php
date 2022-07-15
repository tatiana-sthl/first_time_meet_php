<?php
$grade = 15;

switch ($grade)
{
    case 0:
        echo 'Nul';
    break;

    case 5:
        echo 'Mauvais';
    break;

    case 7:
        echo 'Toujours pas ouf';
    break;

    case 10:
        echo 'Mouais';
    break;

    case 12:
        echo 'Ok';
    break;

    case 15:
        echo 'Bien';
    break;

    case 20:
        echo 'Parfait';
    break;

    default:
        echo "Note non reconnue";
}
?>