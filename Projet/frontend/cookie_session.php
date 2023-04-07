<?php
session_start();

if (isset($_COOKIE['login'])) {
    $login = $_SESSION['login'];
    $_SESSION['login'] = $_COOKIE['login'];
} else {
    $login = null;
}
?>