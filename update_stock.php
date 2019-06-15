<?php 
require_once('conn.php');
  require_once('functions.php');

 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>update settings</title>


    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">



    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">MAS STORE</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
         
          <div class="input-group-append">
         
          </div>
        </div>
      </form>

      <!-- Navbar -->
     <?php require_once('top_bar.php'); ?>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <?php require_once("user_bar.php") ?>

     <form method="POST">
       
          <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
          <div class="row">
          		
          		<div class="col-md-12">

          			<br/>
          			<br/>

          			 <hr/>
          			 

        <h3 id="t_div"  style=" text-align:center; font-family:Exotc350 Bd BT; color:blue;" >Update Stock</h3>
        <hr/>

       <div class="row">
       	<div class="col-md-8">
       		 <select class="form-control form-lg" id="update_des" class="form-control" name="update_des" required>

     
        <?php 

$update_query = "SELECT * FROM buy ";

$sql_update = mysqli_query($conn, $update_query);

while($row = mysqli_fetch_array($sql_update)) {

	$des = $row['description'];



	echo '

		 
        	
        		<option>' . $des . '</option>
        		





	';



}


         ?>

        	</select>
       	</div>

       	<div class="col-md-2">
       		 <button class="btn btn-primary btn-block"  type="submit" name="check" style=""></span><i class="fa fa-check"></i> check</button>
       	</div>

       

       	<?php 

       	if(isset($_POST["clear"])){


       		header('location:update_stock.php');
       	}
       	 ?>

       <?php 

          if(isset($_POST["check"])){

 $description = $_POST['update_des'];

$query = "SELECT * FROM buy WHERE description = '$description'";

$sql = mysqli_query($conn, $query);

$row = mysqli_fetch_array($sql);

		$id = $row['id'];

		$check_description = $row['description'];
	
	$qty = $row['qty'];



		

    }  

      ?>


       </div>
<?php

if(isset($qty)){

	function stock(){

       

      }





	echo ' 

		<div class="form-group">
 	 <label for="quentity">Description</label>
              <div class="form-group">
           <input type="text" name="des_update" id="quentity" value=" ' . $check_description . ' " class="form-control" placeholder="" autofocus="autofocus" >
               
              </div>
 
	<div class="form-group">
 	 <label for="quentity">Quantity</label>
              <div class="form-group">
           <input type="text" name="quentity_update" id="quentity" value=" ' . $qty . ' " class="form-control" placeholder="" autofocus="autofocus" >
               
              </div>



              </div>

           
            </div>

             <button class="btn btn-secondary btn-block"  type="submit" name="update" style=""></span><i class="fa fa-check"></i> Update</button>


              '


              ;






}else{



}
                ?>
            <?php 

            if(isset($_POST["update"])){

            $qty_update = $_POST['quentity_update'];
           
             $update_des_send = $_POST['des_update'];

   $sql_check = "SELECT * FROM buy WHERE description = '$update_des_send'";

   $check_query = mysqli_query($conn, $sql_check);

  	$row2 = mysqli_fetch_array($check_query);

  	$myid2 = $row2['id'];
  	 
      


if(isset($myid2)){


$qty_price = "UPDATE buy SET qty = '$qty_update' WHERE id = '$myid2'";
           $enter = mysqli_query($conn, $qty_price) or die(mysqli_error());

           	successfull_update();
}else{

	error_update();
}


  
            }

             ?>

          		</div>
         	
          </div>
</form>
            <div class="card-footer small text-muted">Current Date <a href="#" id="print" class="btn btn-secondary">            <?php
echo $date=date('D-M-Y');
 ?></a>
   </div>
       </div>
   


        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span><p class="copyright animated fadeInRight slow">2019 &copy; Crafted with heart and Soul by <a href="/">Uoooosuf</a>. All Rights Reserved.</p></span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

 <?php 



     function successfull_update(){

            echo '<script> document.getElementById("t_div").innerText = "Update successfull";</script>';

echo '<script> document.getElementById("t_div").style.color = "green";</script>';

      }


 function error_update(){

            echo '<script> document.getElementById("t_div").innerText = "Error Please check the space";</script>';

echo '<script> document.getElementById("t_div").style.color = "red";</script>';

      }

 
    ?>



    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>



  </body>

</html>
