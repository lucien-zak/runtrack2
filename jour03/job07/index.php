<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
for ($compteurcar = 0; isset($str[$compteurcar]); $compteurcar++) {}
for ($i = 0; $i <= $compteurcar ; $i++) {
    echo $str[$i+1];
}
?>