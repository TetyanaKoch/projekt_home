<?php

session_start();
$password = '12345';

if (isset($_POST['username']) && !empty($_POST['username']) && !empty( $_POST['password'] ) && $_POST['password'] === $password) {
    $_SESSION['username'] = $_POST['username'];
} else {
    $_SESSION['username'] = null;
}

//wenn jemand bereits in der session gespeichert ist, sagen wir hallo. sonst nicht
if (isset($_SESSION['username'])) {
    echo "Hallo " . $_SESSION['username'];
    //require "user-page.php";
} else {
    echo "SIGN IN";
    $_SESSION['username'] = null;
}

?>

<form action ="" method='post'>
    <p>Name</p><input name ='username'>
    <p>Password</p><input type="password" name="password">
    <p><input type='submit' value='Login'></p>
</form>