<?php
/* Define database constants */
define("DB_SERVER", "localhost");
define("DB_USER", "onetrack");
define("DB_PASS", "onetrack");
define("DB_NAME", "onetrackdb");

/* Create a database connection */
$connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

/* Test if connection occurred */
$dbconnect = mysqli_select_db($connect, DB_NAME);

if (mysqli_connect_errno()) {
    die("Database connect failed: " . mysqli_connect_error() . "(" . mysqli_connect_error() . ")");
}
