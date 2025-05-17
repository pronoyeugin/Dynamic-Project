<?php

// db connection
$host="localhost";
$user="root";
$pass="";
$db="dynamicproject";

$conn= new mysqli($host, $user, $pass, $db);
if( $conn -> conncct_error){
	die( $conn -> error );
}else
	// echo "database connected successful";
?>