<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "vacc_reg";

//creating connection

$conn = new mysqli($servername, $username, $password);
session_start();
//check connection 
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
	}
else{
	mysqli_select_db($conn, $dbname);
	//echo "Connection successful";
	}


?>