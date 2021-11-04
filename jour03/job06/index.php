<?php

$str = "Les choses que l'on possede finissent par nous posseder.";

for ($compteurcar = 0 ; isset($str[$compteurcar]); $compteurcar++ ) {}

for ($i = $compteurcar - 1;$i >= 0; $i-- ){
    echo $str[$i];
}
?>