<?php
/**
 * Created by PhpStorm.
 * User: wilder2
 * Date: 28/02/17
 * Time: 11:34
 */


$students = [
    "Emmanuel" => 42,
    "Thierry" => 51,
    "Pascal" => 45,
    "Eric" => 48,
    "Nicolas" => 19
];

$resultat= array_sum($students)/count($students);

echo $resultat;
echo '<br/>';




foreach ($students as $nom=> $age) {
    echo $nom;
    echo ' ';
    echo $age;
    echo '<br/>';
}
