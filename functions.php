<?php

function sayHello () {
    echo 'Hello<br>';
}
sayHello();

function plusOne ($a) {
    echo ++$a . '<br>';
}
plusOne(55);

function sumNumbers ($a, $b, $c = 0) {
    echo $a + $b +$c . '<br>';
}
sumNumbers(2, 10); //c задан по умолчанию в функции
sumNumbers(2, 10, 5); // задаем С

function returnPlusOne ($a) {
    return ++$a;
}
$number = 51;
$result = returnPlusOne($number);
echo "Новое число: $result <hr>";

$number = 50;
function returnArray ($a) {
    return [
        'oldValue' => $a,
        'newValue' => ++$a
    ];
}
$result = returnArray($number);
echo 'Старое значение: ' . $result['oldValue'] . '<br>';
echo 'Новое значение: ' . $result['newValue'];

$numbers = [1, 2, 3 , 7, 6, 4]; //найти максимальное значение

function maxNumber (array $numbers) {
    $max = $number[1];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}
echo maxNumber($numbers) . '<br>';