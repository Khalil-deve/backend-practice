<?php
session_start();

/**
 * Checks if the user is logged in. 
 * If not, redirects to the login page.
 */
function check_login() {
    if (!isset($_SESSION['name'])) {
        header('Location: login.php');
        exit();
    }
}

/**
 * Redirects to home if already logged in.
 */
function redirect_if_logged_in() {
    if (isset($_SESSION['name'])) {
        header('Location: home.php');
        exit();
    }
}
?>
