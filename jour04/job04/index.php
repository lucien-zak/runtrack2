

<form method="POST" action="#">
    <input type="text" name="arg1">
    <input type="text" name="arg2">
    <input type="text" name="arg3">
    <input type="text" name="arg4">
    <input type="submit">
</form>
<?php
?>
<style>
    table,td,th {border-spacing: 0;border: 1px solid black; text-align: center}
    body {display: flex; align-items: center; justify-content: center; flex-direction: column; padding-top: 30vh;}
</style>
<table>
    <thead>
        <tr>
            <th>Arguments</th>
            <th>Valeurs</th>
        </tr>
    </thead>
    <tbody>
        <tr>
<?php
foreach ($_POST as $arg => $element){
    echo "<td>".$arg."</td><td>".$element."</td></tr>";}?>           
    </tbody>
</table>


