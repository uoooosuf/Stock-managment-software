<?php
require_once('conn.php');

$id = $_GET['mydelete'];

	$mysqli = "DELETE  FROM daily_post WHERE id = '$id'";

	mysqli_query($conn, $mysqli);

	header('location:daily_r.php')




  ?>

