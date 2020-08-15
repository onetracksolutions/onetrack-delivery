<?php
session_start();

session_destroy();
unset($_SESSION['login']);

$_SESSION['success']= "You have logged out successfully..!";

header("Location: ../login.php");
