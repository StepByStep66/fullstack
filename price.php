<?php
$burger = 4.95;
$shake = 1.95;
$coke = 0.85;
$teaPercent = 16;
$taxPercent = 7.5;
$summ = 2 * $burger + $shake + $coke;
$tea = $summ / 100 * $teaPercent;
$tax = ($tea + $summ) / 100 * $taxPercent;
$itog = $summ + $tea + $tax;
echo $itog . ' ' . 'рублей';