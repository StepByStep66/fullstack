<?php

$number = 5;
if ($number > 5) {
    echo $number . ' ' . 'больше 5';
}

echo '<br>';

if ($number > 5) {
    echo $number . ' ' . 'больше 5';
} else {
    echo $number . ' ' . 'меньше 5';
}

echo '<br>';

if ($number > 5) {
    echo $number . ' ' . 'больше 5';
} else if ($number < 5) {
    echo $number . ' ' . 'меньше 5';
} else {
    echo $number . ' ' . 'равно 5';
}

echo '<br>';
echo '<hr>';

$second_number = 1;
if ($number > 0 and $second_number == 0) {
    echo '$number > 0 и $second_number = 0';
}
echo '<br>';
if ($number > 0 or $second_number == 0) {
    echo '$number > 0 или $second_number = 0';
}
echo '<br>';
if ($number >= 0 or $second_number <= 0) {
    echo '$number >= 0 или $second_number <= 0';
}