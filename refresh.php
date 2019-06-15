<?php require_once('conn.php'); ?>
<?php 

$query="SELECT * FROM buy";

      $sql=mysqli_query($conn, $query);

      while($row=mysqli_fetch_array($sql)){

      	$id = $row['id'];
      	$description = $row['description'];
      	$qty = $row['qty'];
      	$price = $row['price'];
      	$amount = $row['amount'];

      	$cal_amount = $qty * $price;

      	 $sql_update = "UPDATE buy SET amount = $cal_amount WHERE id = $id ";
     $query_update = mysqli_query($conn, $sql_update);  

      header("location:home.php");


      

      }



 ?>