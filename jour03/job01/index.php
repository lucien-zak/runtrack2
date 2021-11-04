<?php

$nombre = [200,204,173,98,171,404,459];
$i = 0;
    foreach ($nombre as $element) {
        $i++; 
        if ($element % 2 == 0) {
            echo $element." est pair<br>";
        }
        else {
            echo $element." est impair<br>";
        }
    }
?>