<?php

function calcul($a, $operation, $b) {
    if ( $operation == "+") {
        return $a + $b;
    }
    elseif ($operation == "-") {
        return $a - $b;
    }
    elseif ($operation == "/") {
        return $a / $b;
    }
    elseif ($operation == "*") {
        return $a * $b;
    }
    elseif ($operation == "%") {
        return $a % $b;
    }
    else {
        return "Il y'a une erreure";
    }
}

$resultat = calcul(3,"p",2);
echo $resultat;

?>