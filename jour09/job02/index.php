<?php
function recup_nom_array()
{
    $db = mysqli_connect("localhost", "root", "root", "jour08");
    $req = mysqli_query($db, "SELECT nom, capacite FROM salles");
    $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
    foreach ($res as $element) {
        foreach ($element as $key => $element2) {
            echo "<th>" . $key . "</th>";
        }
        break;
    }
}

function recup_ligne()
{
    $db = mysqli_connect("localhost", "root", "root", "jour08");
    $req = mysqli_query($db, "SELECT nom, capacite FROM salles");
    $res = mysqli_fetch_all($req, MYSQLI_ASSOC);
    foreach ($res as $element) {
        echo "<tr>";
        foreach ($element as $key => $element2) {
            echo "<td>" . $element2 . "</td>";
        }
        echo "</tr>";
    }
}
?>
<style>
    td, th {border-spacing: 0; border: 1px solid black; padding: 10px; text-align: center;}
    table {border-spacing: 0;}
</style>
<table>
    <thead>
        <tr>
            <?php recup_nom_array()?>
        </tr>
    </thead>
    <tbody>
        <?php recup_ligne()?>
    </tbody>
</table>