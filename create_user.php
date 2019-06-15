<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create User</title>


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
          			 
        <h3 id="t_div"  style=" text-align:center; font-family:Exotc350 Bd BT; color:blue;" >Add New User</h3>
 	

<?php


require_once('conn.php');
  require_once('functions.php');

      if(isset($_POST["submit"])){

      	 $user = $_POST['user'];

        $password = $_POST['password'];
        $user_select = $_POST['user_select'];

$query = "SELECT * FROM users WHERE username = '$user' AND password = '$password'";

$sql = mysqli_query($conn, $query);

      if(mysqli_num_rows($sql) > 0){

      stock_exist();

    }else{

  $sqli = "INSERT INTO users(username, password, role)VALUES( '$user', '$password',  '$user_select')";

      $mysql = mysqli_query($conn, $sqli) or die(mysqli_error());   
     
        set_txt();

    }

}

       ?>
  	
        <hr/>
          			 <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="user" id="user" class="form-control" placeholder="username address" autofocus="autofocus" required="">
                <label for="user">Username</label>
              </div>
            </div>

            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="password" id="password" class="form-control" placeholder="password" autofocus="autofocus" required>
                <label for="password">Password</label>
              </div>
            </div>

           <select class="form-control form-lg" id="update_des" class="form-control" name="user_select" required>
           	<option>user</option>
           		<option>admin</option>
           </select>
            
           <br>

                <button class="btn btn-primary btn-block"  type="submit" name="submit" style=""></span><i class="fa fa-save"></i> Create</button>	
        </form>

          		</div>

          		</div>


     

            <div class="card-footer small text-muted">Current Date <a href="#" id="print" class="btn btn-secondary">            <?php
echo $date=date('D-M-Y');

 ?></a></div>
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

   <?php 



     function set_txt(){

            echo '<script> document.getElementById("t_div").innerText = "Sucessfull";</script>';

echo '<script> document.getElementById("t_div").style.color = "green";</script>';

      }


 function stock_exist(){

            echo '<script> document.getElementById("t_div").innerText = "Sorry User Already Exist ";</script>';

echo '<script> document.getElementById("t_div").style.color = "red";</script>';

      }

 
    ?>

  </body>

</html>
