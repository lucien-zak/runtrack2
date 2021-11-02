<?php

$car = "Lucien";
$age = 31;
$statut = true;
$ageexacte = 31.5;

?>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        <tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo gettype($car)?></td>
            <td><?php echo '$car'?></td>
            <td><?php echo $car?></td>
        </tr>
        <tr>
            <td><?php echo gettype($age)?></td>
            <td><?php echo '$age'?></td>
            <td><?php echo $age?></td>
        </tr>   
        <tr>
            <td><?php echo gettype($statut)?></td>
            <td><?php echo '$statut'?></td>
            <td><?php echo $statut?></td>
        </tr>   
        <tr>
            <td><?php echo gettype($ageexacte)?></td>
            <td><?php echo '$ageexacte'?></td>
            <td><?php echo $ageexacte?></td>
        </tr>      
</table>
