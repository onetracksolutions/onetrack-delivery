<?php
session_start();
require_once("db_connection.inc.php");


if (isset($_POST['register_btn'])) {
    $firstname = mysqli_real_escape_string($connect, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($connect, $_POST['lastname']);
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $passwd = mysqli_real_escape_string($connect, $_POST['passwd']);
    $passwdrepeat = mysqli_real_escape_string($connect, $_POST['passwdrepeat']);
    $emailaddress = mysqli_real_escape_string($connect, $_POST['emailaddress']);
    $streetaddress = mysqli_real_escape_string($connect, $_POST['streetaddress']);
    $phone = mysqli_real_escape_string($connect, $_POST['phone']);

    if (!$passwd == $passwdrepeat) {
        $_SESSION['status'] =  "Password and Confirmation Password Does not Match";
        header('Location: register.php');
    } else {
        $sql = "INSERT INTO tblcustomer(firstname, lastname, username, passwd, emailaddress, streetaddress, phone) 
        VALUES (?, ?, ?, ?, ?, ?, ?);";

        $stmt = mysqli_stmt_init($connect);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error($connect);
        } else {
            mysqli_stmt_bind_param($stmt, "sssssss", $firstname, $lastname, $username, $passwd, $emailaddress, $streetaddress, $phone);
            if (!mysqli_stmt_execute($stmt)) {
                $_SESSION['status'] =  "User Not Added";
                header('Location: ../register.php');
            } else {
                $_SESSION['success'] =  "User Added Successfully You May Login Now!";
                header('Location: ../index.php');
            }
        }
    }
}
// Close statement
mysqli_stmt_close($stmt);

// Close connection
mysqli_close($connect);
