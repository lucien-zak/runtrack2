<?php
$j = 1;
$divisible = 0;

for ($i = 2;$i <= 1000;$i++) {
    while ($j + 1 < $i ) {
        $j += 1;
        if ($i % $j == 0) {
            echo "";
            $divisible += 1;
        }
    }
    if ($divisible == 0) {
        echo $i."<br>"; }
    $j = 1;
    $divisible = 0;
}
?>
