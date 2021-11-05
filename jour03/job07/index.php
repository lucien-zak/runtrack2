<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
for ($compteurcar = 0; isset($str[$compteurcar]); $compteurcar++) {}
//echo $str."<br>";
for ($i = 1; $i <= $compteurcar - 2 ; $i++) {
    echo $str[$i];
}
    echo $str[$compteurcar - 1].$str[0];
?>