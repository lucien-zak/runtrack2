<form action="#" method="POST">
    <input name="username" type="text" placeholder="Nom d'utilisateur">
    <input name="password" type="text" placeholder="Mot de passe">
    <input type="submit">
</form>

<?php
if ($_POST ["username"] == "John" && $_POST ["password"] == "Rambo") {
    echo "C’est pas ma guerre";
}
else {
    echo "Votre pire cauchemar.";
}

?>