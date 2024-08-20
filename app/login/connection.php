<?php

$dbhost = "localhost";
$dbuser = "db_user"; //onoma xristi diaxiristi tis basis
$dbpass = "db_password"; //kwdikos diaxiristi
$dbname = "test_database";
$dbport = 5432;
$conn_string = "host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpass";

// Establish a connection to the PostgreSQL database
$conn = pg_connect($conn_string);

if (!$conn) {
	echo "An error occurred.\n";
	die("Failed to connect to the database!");
} else {
	echo "Connection successful!";
}
?>