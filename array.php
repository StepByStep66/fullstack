<?php
$numbers = [1, 2, 3, 4, 5];
echo $numbers[1];
echo '<br>';
echo '<hr>';

$count = count($numbers); //количество элементов в массиве
for ($i = 0; $i < $count; $i++) {
    echo "$i $numbers[$i] <br>";
}
echo '<hr>';
foreach ($numbers as $number) {
    echo "$number <br>";
}
echo '<hr>';

foreach ($numbers as $key => $value) {
    echo "$key: $value <br>";
}
echo '<hr>';
$new_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $new_numbers[] = $i;
}
echo '<pre>';
print_r($new_numbers);
echo '<hr>';

$person = [
    'name' => 'Stepan',
    'age' => '36',
    'city' => 'Yekaterinburg'
];
echo $person['name'];
print_r($person);
echo '<hr>';

$person['car'] = 'Toyota';
echo 'Добавили машину <br>';
print_r($person);
echo '<br>';

unset($person['age']);
echo 'Удалили возраст <br>';
print_r($person);
echo '<br>';

$person['name'] = '';
echo 'Обнулили имя не удаляя <br>';
print_r($person);
echo '<br>';
echo '</pre>';