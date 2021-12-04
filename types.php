<?php
$name = 'Степан';
$lastName = 'Сарасек';
echo $name . ' ' . 'это' . ' ' . gettype($name);
echo '<br>';
$age = 36;
echo $age . ' ' . 'это' . ' ' . gettype($age);
echo '<br>';
$money = '999.99';
echo $money . ' ' . 'это' . ' ' . gettype($money);
echo '<br>';
$logic = false;
echo $logic . ' ' . 'это' . ' ' . gettype($logic);
echo '<br>';
if ($name) {
    echo 'true';
} else {
    echo 'false';
}
echo '<br>';
$zero = 0;
if ($zero) {
    echo '$zero true';
} else {
    echo 'false';
    echo $zero;
}
echo '<br>';
$message = "Значение переменной $name";
echo $message;
echo '<br>';
echo htmlspecialchars('<img src="images/img.png">');
echo '<br>';
$number = 10;
$number++;
echo $number;
echo '<br>';
$number = 10;
$number--;
echo $number;
echo '<br>';
$n = 9;
$new_n = $n++;
#echo $new_n;
echo '<br>';
#$new_n = ++$n;
echo $new_n;
echo '<br>';
# Присоединение переменных 
$name .=" $lastName";
echo $name;