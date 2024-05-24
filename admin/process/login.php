<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

if($email == 'cyclehire.denpasar@gmail.com' && $password == 'cyclehire123') {
    $_SESSION['login_status'] = TRUE;
    $_SESSION['login_email'] = $email;

    header('location: ../home.php');
} else {
    header('location: ../index.php');
}
?>