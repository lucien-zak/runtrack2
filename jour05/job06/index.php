<?php

function leetspeek($str) {
    for ($i = 0;isset($str[$i]);$i++){
        if ($str[$i] == "A" or $str[$i] == "a"){
            $str[$i] = "4"; 
        }
        elseif ($str[$i] == "B" or $str[$i] == "b"){
            $str[$i] = "8"; 
        }
        elseif ($str[$i] == "E" or $str[$i] == "e"){
            $str[$i] = "3"; 
        }
        elseif ($str[$i] == "G" or $str[$i] == "g"){
            $str[$i] = "6"; 
        }
        elseif ($str[$i] == "L" or $str[$i] == "l"){
            $str[$i] = "1"; 
        }
        elseif ($str[$i] == "S" or $str[$i] == "s"){
            $str[$i] = "5"; 
        }
        elseif ($str[$i] == "T" or $str[$i] == "t"){
            $str[$i] = "7"; 
        }
    }
    return $str;
}
?>

<form action="#" method="POST">
    <input type="text" name="mot">
</form>

<?php
if (isset($_POST["mot"])) {
$resultat = leetspeek($_POST["mot"]);
echo $resultat;
}
?>