<?php

//Your Mysql Config
$servername = "cloud29.mysql.database.azure.com";
$username = "meenakshi";
$password = "password29_10";
$dbname = "db1";

//Create New Database Connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check Connection
if ($conn->connect_error) {
	die("Connection Failed: " . $conn->connect_error);
}
