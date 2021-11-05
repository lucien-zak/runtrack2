
<?php
$compteurarg = 0;
foreach ($_GET as $element) {
   if ($element != NULL) {
       $compteurarg++;
   }
}
echo "Il y'a ".$compteurarg." arguments avec des valeurs";
?>


<form method="GET" action="#">
    <input type="text" name="arg1">
    <input type="text" name="arg2">
    <input type="text" name="arg3">
    <input type="text" name="arg4">
    <input type="submit">
</form>
