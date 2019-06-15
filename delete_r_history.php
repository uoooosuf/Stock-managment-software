<?php
require_once('conn.php');

$id = $_GET['mydelete'];

	$mysqli = "DELETE  FROM history WHERE id = '$id'";

	mysqli_query($conn, $mysqli);

	header('location:history.php')




  ?>

