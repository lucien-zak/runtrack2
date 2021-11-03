<?php

$jour = array("Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
$horaire = array("08H00 - 9H00", "9H00-10h00", "10H00-11H00", "11H00-12H00");
$nbjour = count($jour);
$nbhor = count($horaire);
$i = 0;
?>
<style> 
    table {color:red; border: 1px solid black;}
    td, th {border: 1px solid black; text-align: center; margin: 0; width:200px;}
    td:hover {background-color: red;}
  </style> 
<table>
    <thead>
        <tr>
            <th>
            <?php
                while ($i < $nbjour) {
                    echo("<th>".$jour[$i]."</th>");
                    $i = $i + 1;
                }
            ?>
        </tr>
    <tbody>
        <?php
            $i = 0;
            $j = 0;
            while ( $i < $nbhor) {
                echo("<tr>");
                echo("<td>".$horaire[$i]);
                    while ( $j < $nbjour) {
                        echo("<td></td>");
                        $j++;
                    }
                echo("</tr>");
                $i++;
                $j = 0;
            }