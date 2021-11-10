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
$largint = 1;
$largext = $hauteur ;

for ($l = 1; $l <= $largext; $l++ ){
    for ($n = 1; $n <= $largext / 2; $n++ ){
        echo "<td><td>";
    }
    $largext +=2;
    echo "<td>/</td>";
    for ($m = 1; $m <= $largint - 1; $m++){
        echo "<td id='test'></td>";
    }
    echo "<td>\</td></tr>";
    $largint += 2;
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
    echo "<td id='test'> </td>";
}
echo "<td>|</td></tr>";
?>

    </tbody>
</table>
<style> body {display: flex; align-items: center; justify-content: center;}
        table,td {border-spacing: 0;}
        #test {border-bottom: 1px solid black; padding: 0 5px;}
</style>
<!----
/__________________\
/__\
/____\
/______\