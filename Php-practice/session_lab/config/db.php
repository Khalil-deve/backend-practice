<?php
$localhost = 'localhost';
$user = 'root';
$password = '';
$database = 'student';

$connect = mysqli_connect($localhost, $user, $password, $database);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
