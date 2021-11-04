<?php

$str = "On n est pas le meilleur quand on le croit mais quand on le sait";
$compteurvoy = 0;
$compteurcons = 0;
$dic = [
    "consonnes" => ["b","B","c","C","d","D","f","F","g","G","h","H","j","J","k","K","l","L","m","M","n","N","P","p","q","Q","r","R","s","S","t","T","v","V","w","W","x","X","z","Z"],
    "voyelles" =>  ["a","A","e","E","i","I","o","O","u","U","y","Y"]
    ]

?>

<table>
    <thead>
        <tr>
            <th>voyelles</th>
            <th>consonnes</th>
        </tr> 
    <tbody>
        <tr>
<?php
    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($dic["voyelles"] as $element) {
            if ($element == $str[$i])
                $compteurvoy++;
          }
        foreach ($dic["consonnes"] as $element) {
            if ($element == $str[$i])
                $compteurcons++;
      }
    }
echo "<td>".$compteurvoy."</td>";
echo "<td>".$compteurcons."</td>";


?>

        </tr>
    </tbody>
</tables>        




