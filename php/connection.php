<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = "siwes";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}

?>