
<?php
$compteurarg = 0;
foreach ($_POST as $element) {
   if ($element != NULL) {
       $compteurarg++;
   }
}
echo "Il y'a ".$compteurarg." arguments avec des valeurs";
?>


<form method="POST" action="#">
    <input type="text" name="arg1">
    <input type="text" name="arg2">
    <input type="text" name="arg3">
    <input type="text" name="arg4">
    <input type="submit">
</form>
