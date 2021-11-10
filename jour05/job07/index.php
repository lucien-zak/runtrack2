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

function cesar($str, $decalage = 2) {
    $alpahbet = ["a","A","b","B","c","C","d","D","e","E","f","F","g","G","h","H","i","I","j","J","k","K","l","L","m","M","n","N","o","O","p","P","Q","q","R","r","S","s","T","t","U","u","V","v","W","w","X","x","Y","y","Z","z"];
    
?>



<form action="#" method="POST">
    <input type="text" name="str">
    <select name="fonction">
        <option value="gras">gras</option>
        <option value="cesar">cesar</option>
        <option value="plateforme">plateforme</option>
    </select>
    <input type="submit">
</form>

<?php


if (isset($_POST["str"]) && isset($_POST["fonction"])) {
if ($_POST["fonction"] == "gras") {
    $resultat = gras($_POST["str"]);
    echo $resultat;
}
if ($_POST["fonction"] == "cesar") {
    $resultat = cesar($_POST["str"]);
    echo $resultat;
}

}

?>