<?php

function occurences($str, $char) {
    $comptoccur = 0;
    for ($i = 0; isset($str[$i]); $i++){
        if ($str[$i] == $char){
            $comptoccur += 1;
        }
    }
    return $comptoccur;

}

//$test = occurences("abcdeaaaa","a");
//echo "Il y'a ".$test." occurences.";
?>

<form action="#" method="POST">
    <input type="text" name="mot" placeholder="Phrase">
    <input type="text" name="char" placeholder="caractere">
    <input type="submit">
</form>

<?php
if (isset($_POST["mot"])) {
$resultat = occurences($_POST["mot"],$_POST["char"]);
echo "Il y'a ".$resultat." "."'".$_POST["char"]."'";
}
?>