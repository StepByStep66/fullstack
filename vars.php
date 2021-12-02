<?php

$name = "Stepan";
$age = 36;
// Коментарий
echo $name;
echo "<br>";
echo $age;
echo "<br>";
$last_name = "Sarasek";
echo "<br>";
echo "$name";
/**
 * Многострочный 
 * коментарий
 */
$full_name = $name . ' ' . $last_name;
echo "<br>";
echo $full_name;
echo "<br>";
$word = 'lower_case ';
$word = strtoupper($word);
echo trim($word) . '!';

