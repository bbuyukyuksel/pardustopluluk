<?php
ob_start();
session_start();
?>

<?php
$username = "root";
$password = "";
$server = "localhost";
$dbname = "pardus";

$mysqli = new mysqli($server, $username, $password, $dbname);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>