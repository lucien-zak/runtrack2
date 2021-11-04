<?php

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelle = ["a","A","e","E","i","I","o","O","u","U","y","Y"];

for ($i=0; isset($str[$i]); $i++) {
    foreach ($voyelle as $element) {
        if ($element == $str[$i]) {
            echo $str[$i];
        }
    }
}


?>