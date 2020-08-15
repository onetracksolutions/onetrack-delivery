<?php
session_start();
require_once("db_connection.inc.php");

if (isset($_POST['login_btn'])) {
    $emailaddress = mysqli_real_escape_string($connect, $_POST['emailaddress']);
    $passwd = mysqli_real_escape_string($connect, $_POST['passwd']);

    $sql = "SELECT * FROM tbldriver WHERE emailaddress='$emailaddress' AND passwd='$passwd'";
    $query = mysqli_query($connect, $sql);
    $usertypes = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if ($usertypes['usertype'] == 'admin') {
        $_SESSION['login'] = $_POST['username'];
        header("location: ../admin");
    } elseif ($usertypes['usertype'] == 'driver') {
        $_SESSION['login'] = $_POST['username'];
        header("location: ../driver");
    } elseif ($usertypes['usertype'] == 'customer') {
        $_SESSION['login'] = $_POST['username'];
        header("location: ../customer");
    } else {
        $_SESSION['status'] = "*Invalid username or password";
        header("location: ../index.php");
    }
}
