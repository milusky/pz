<?php

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$db = new mysqli("localhost","root","","auth");
$q ="SELECT * FROM user WHERE email = '$email'";
echo $q;
?>
<form action="index.php" method="get">
<label for="emailInput">Email:</label>
<Input type="passwordInput">Hasło:</label>
<Input type="password" name="password" id="passwordInput">
<input type="submit" value="Zaloguj">
</form>