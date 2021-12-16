<?php
$f = -50;
echo '<table border="1">';
while ($f < 51) {
    $c = ($f - 32) * 5 / 9;
    echo '<tr>' . '<td style="padding: 0 5px 0 5px;">' . $f . '°F' . '</td>' . '<td style="padding: 0 5px 0 5px;">' . ' ' . round($c, 2) . '°C' . '</td>' . '</tr>';
    $f++;
}
echo '</table>';