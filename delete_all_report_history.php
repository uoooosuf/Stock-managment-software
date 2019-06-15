<?php 
	
	require_once('conn.php');

$id = $_GET['mydelete'];

$mysqli = "DELETE  FROM history";

	mysqli_query($conn, $mysqli);

	header('location:history.php')

 ?>