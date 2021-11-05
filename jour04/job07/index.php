<!--
<td>_</td>
<td>/</td>
<td>\</td>
<td>|</td>
<td> </td>


<table>
    <tbody>
    <tr>
            <td>/</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>\</td>
        </tr>
    <tr>
            <td>/</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>\</td>
        </tr>
        <tr>
            <td>|</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>|</td>
        </tr>
        <tr>
            <td>|</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>|</td>
        </tr>
        <tr>
            <td>|</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>|</td>
        </tr>
        <tr>
            <td>|</td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td> </td>
            <td>|</td>
        </tr>
        <tr>
            <td>|</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>_</td>
            <td>|</td>
        </tr>
    </tbody>
</table>
-->

<table>
    <tbody>
<?php

$largeur = 10;
$hauteur = 5;

for ($l = 1; $l <= $hauteur ; $l++) {
    echo "<tr><td>/</td>";
    for ($m = $largeur - 2; $m >= 1; $m--) {
        echo " <td>_</td>";
    }
    echo "<td>\</td></tr>";
}

for ($i = 1; $i <= $hauteur - 1; $i++) {
    echo "<tr><td>|</td>";
    for ($j = 1; $j <= $largeur - 2; $j++) {
        echo "<td> </td>";
    }
    echo "<td>|</td></tr>";

}
echo "<tr><td>|</td>";
for ($k = 1; $k <= $largeur - 2; $k++) {
    echo "<td>_</td>";
}
echo "<td>|</td></tr>";
?>

    </tbody>
</table>
<style> body {display: flex; align-items: center; justify-content: center;}
        table {border-spacing: 0;}
</style>