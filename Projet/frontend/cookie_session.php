<?php
session_start();

if (isset($_COOKIE['login'])) {
    $_SESSION['login'] = $_COOKIE['login'];
    setcookie('user_id', $_SESSION['login'], time() + (86400), "/"); // 1 day expiration
}

