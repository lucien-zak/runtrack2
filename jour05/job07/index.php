<?php

    $alpahbet = ["a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l","L","m","M","n","N","o","O","p","P","Q","q","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z"];
    $majuscule =  ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];


function gras($str) {
    $majuscule =  ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
    foreach ($majuscule as $letter) {
            if ($letter == $str[0]) {
                $str = "<b>".$str."</b>";
            }
        }
        return $str;    } 

function cesar($str, $decalage) {
    $alpahbet = ["a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l","L","m","M","n","N","o","O","p","P","q","Q","r","R","s","S","t","T","u","U","v","V","w","W","x","X","y","Y","z","Z","a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l","L","m","M","n","N","o","O","p","P","q","Q","r","R","s","S","t","T","u","U","v","V","w","W","x","X","y","Y","z","Z"];
    for ($i = 0; isset($str[$i]); $i++){
        for ($j = 0; isset($alpahbet[$j]); $j++){
            if ($alpahbet[$j] == $str[$i]) {
                echo $alpahbet[$j + $decalage * 2];
                break;
            }
        }
    }
}

function plateforme($str){
    for ($compteur = 0; isset($str[$compteur]); $compteur++) {}
    if ($str[$compteur - 1] == "e" or $str[$compteur - 1] == "E"  && $str[$compteur - 2] = "m" or $str[$compteur - 2] = "M" ){
        echo $str."_";
    }
    else {echo $str;}
    
}
?>



<form action="#" method="POST">
    <input type="text" name="str">
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <input type="number" name="decalage" placeholder="si décalage" value = 2>
    <input type="submit">
</form>

<?php


if (isset($_POST["str"]) && isset($_POST["fonction"])) {
if ($_POST["fonction"] == "gras") {
    $resultat = gras($_POST["str"]);
    echo $resultat;
}
if ($_POST["fonction"] == "cesar") {
    $resultat = cesar($_POST["str"],$_POST['decalage']);
    echo $resultat;
}
if ($_POST["fonction"] == "plateforme") {
    $resultat = plateforme($_POST["str"]);
    echo $resultat;
}

}

?>