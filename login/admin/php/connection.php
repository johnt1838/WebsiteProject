<?php

$dbhost = "localhost";
$dbuser = "id15895069_loginsample"; //onoma xristi diaxiristi tis basis
$dbpass = "#*tqgR$4\uRBs1\h"; //kwdikos diaxiristi
$dbname = "id15895069_login";
   $con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    
if(!$con)
{
	echo mysqli_connect_error();
	die("failed to connect!");
}
?>