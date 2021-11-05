<form action="#" method="GET">
    <input name="nombre" type="text" placeholder="nombre">
    <input type="submit">
</form>

<?php
if (isset($_GET["nombre"])) {
    if ($_GET["nombre"] % 2 == 0) {
        echo "Pair";
    }
    else {
        echo "Impair";
    }
}    
?>