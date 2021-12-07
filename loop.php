<?php
$number = 0;
while ($number < 10) {
    echo $number . '<br>';
    //$number = $number + 1;
    //$number += 1;
    $number++;
}
echo '<select>';
echo '<option selected disabled>-- Выберете значение --</option>';
for ($i = 1; $i < 10; $i++) {
    echo "<option>$i</option>";
}
echo '</select>';