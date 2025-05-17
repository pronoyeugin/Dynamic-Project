<?php

//databasa connection
include('../lib/connection.php');

// delete query

if(isset($_GET['id']) ){

	$d_id = $_GET['id'];

	// echo $d_id;

	$delete_sql = "DELETE FROM category WHERE id= $d_id";

	if( $conn -> query($delete_sql) ) {
		// echo "data deleted"; 
		header('Location:category.php');

	}else{
		die($conn -> error);
	}

}else{
	header('Location:category.php');

}


?>