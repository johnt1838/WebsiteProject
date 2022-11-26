<?php
$hostName = "localhost"; // host name
$username = "id15895069_loginsample";  // database username
$password = "#*tqgR$4\uRBs1\h"; // database password
$databaseName = "id15895069_login"; // database name

$connection = new mysqli($hostName,$username,$password,$databaseName);
if (!$connection) {
    die("Error in database connection". $connection->connect_error);
}
?>