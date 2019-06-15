 <?php 	require_once('conn.php') ?>
  <?php require_once('functions.php') ?>

<?php 

 $mytotal = $_GET['mytotal'];

$date = date('D-M-Y');
$time = date('h:i A');



$query="SELECT * FROM users WHERE id = $id";

      $sql=mysqli_query($conn, $query);

      $row=mysqli_fetch_array($sql);

 $username = $row['username'];

if($mytotal == 0){

	echo "SORRY: Emphty Record";

}else{

	
  $sqli = "INSERT INTO daily_history(datee, timee, amount, name)VALUES( '$date', '$time', '$mytotal',  '$username')";

      $mysql = mysqli_query($conn, $sqli) or die(mysqli_error());  




$mysqli = "DELETE FROM daily_post";

	mysqli_query($conn, $mysqli);

	header('location:daily_r.php');
}



 ?>