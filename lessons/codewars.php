<?php
function paperwork(int $n, int $m): int
{
  if ($n < 0 || $m < 0) {
    return 0;
  } else return $n * $m;
}
echo paperwork(5, 5) . '<br>';
echo '<pre>';
#$str = 'abcdefg';
#solution('abc') // should return ['ab', 'c_']
#solution('abcdef') // should return ['ab', 'cd', 'ef']

function solution($str) {    
    $count = strlen($str);
    $strArr = [$str];
    $array = [];
    if ($count % 2 == 0) {
    for ($i = 0; $i < $count; $i++) {
        $array[] = $strArr[0][$i] . $strArr[0][++$i];
    }
} else {
    for ($i = 0; $i < $count - 1; $i++) {
        $array[] = $strArr[0][$i] . $strArr[0][++$i];
    }
    $array[] = $strArr[0][$i] . '_';
}
    return $array;
}
echo '<pre>';
print_r(solution('abcdefgh123123156'));
echo '<hr>';

function adjacentElementsProduct($array) {
    $arraySum = [];
    $count = count($array);
    for ($i = 0; $i < $count - 1; ++$i) {
        $arraySum[] = $array[$i] * $array[$i + 1];
    }
    print_r($arraySum);
    return max($arraySum);
    echo '<pre>';
}

  echo adjacentElementsProduct([-23, 4, -5, 99, -27, 329, -2, 7, -921, 2]);