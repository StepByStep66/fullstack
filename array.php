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
echo '<hr>';

$colors = ['red', 'green', 'blue'];
$output = '';
foreach ($colors as $color); {
    $output = $output . ' ' . $color;
}

$string_colors = implode(' ', $colors); //выводит массив как строку
echo $string_colors;
echo '<br>';

$new_str = 'предложение из 4 слов';
$array = explode(' ', $new_str); //разбивает строку и записывает в массив
print_r($array);
echo '<hr>';

$numbers = [2, 4, 6, 1, 3];
print_r($numbers);
sort($numbers);//сортирует массив по значениям (ключи переопределяются)
print_r($numbers);
echo '<hr>';

$person['name'] = 'Stepan';
$person['last_name'] = 'Sarasek';

print_r($person);
asort($person);//ассоциативная сортировка. не меняет ключи
print_r($person);

ksort($person);
print_r($person);
echo '<hr>';

$persons = [
    [
        'name' => 'Stepan',
        'age' => 36,
        'city' => 'Yekaterinburg',
    ],
    [
        'name' => 'Petr',
        'age' => 20,
        'city' => 'Moscow',
    ],
    [
        'name' => 'John',
        'age' => 45,
        'city' => 'London',
    ]
    ];

    //функция, которая присваивает -1 1 или 0 сравнивая возраст
function sortByAge ($a, $b) {
        if ($a['age'] > $b['age']) {
            return 1;
        } else if ($a['age'] < $b['age']) {
            return 0;        
        } else {
            return 1;
        }
    }
print_r($persons);
usort($persons, 'sortByAge');//сортировка по возрасту, используя нашу новую функцию
print_r($persons);
echo '<hr>';

function sortByCity ($a, $b) {
    return $a['city'] <=> $b['city'];// то же самое делает этот символ - функция, которая присваивает -1 1 или 0 сравнивая возраст
}
usort($persons, 'sortByCity');
print_r($persons);
echo '<hr>';

print_r($persons[0]);
print_r($persons[0]['age'][0]);

