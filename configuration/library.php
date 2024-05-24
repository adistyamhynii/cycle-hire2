<?php
 session_start();

 function check_login_page() {
    $login_status = isset($_SESSION["login_status"]) ? $_SESSION['login_status'] : FALSE;

    if($login_status) {
        header('location: home.php');
    }
 }

 function check_login() {
    $login_status = isset($_SESSION["login_status"]) ? $_SESSION['login_status'] : FALSE;
    
    if($login_status) {
        header('location: home.php');
    } else {
        header('location: login.php');
    }
 }

 function check_admin() {
    $login_status = isset($_SESSION["login_status"]) ? $_SESSION['login_status'] : FALSE;

    if(!$login_status) {
        header('location: login.php');
    }
 }
?>