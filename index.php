<!DOCTYPE html>
<html>
<head>

    <title>login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<?php 	require_once('conn.php'); ?>


<style>
	body{
		background:url(pictures/background.jpg);
		background-size:cover;
	}
	.background{

</style>
<body>



<?php


?>

<?php 
if (isset($_POST["login"])) {

$username=$_POST['username'];
$password=$_POST['password'];

$mysqli= "SELECT * FROM users WHERE username='$username' AND password='$password' ";
            $run = mysqli_query($conn, $mysqli);
          
           if(mysqli_num_rows($run) > 0){
             	
        $row = mysqli_fetch_array($run);
        		$role = $row['role'];
        	if($role == "user"){

              $_SESSION['user'] = $row['id'];

        		header('location:home.php');

        	}elseif($role == "admin"){
              $_SESSION['user'] = $row['id'];

        		header('location:admin/home.php');

        	}
             	
           
             	
             }else{
             	echo "<center> <div class='alert alert-success' role='alert'  style='width:50%; margin-top:20px;   position: absolute; margin-left:25%;'>
        <strong>Incorrect Password</strong> please contact admin for permission <i class='fa fa-phone'></i>08068199866  
      </div></center>";
             }

}

 ?>


<center>
	<div class="container" style="margin-top:60px;">
		<div class="background"> 
		<div class="row">
			<div class="col-md-12 col-xs-12 ">
	
	</div>
	</div>

	
  <div style="margin-top:70px; background-color:#212429; min-width:50%; max-width:50%; height:300px; "> 
  
  <h4 style="color:white; background-color:#212429;"> <hr/>MAS-SOURCES LTD</h4>
   <hr style="background-color:white;" />
  	<h2 style="color:white;">USER LOGIN <i class="fa fa-lock"></i></h2>
<form method="POST">

              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username" id="username"  style="max-width:300px;">
               

              </div>
               <div id="loginform" class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" style="max-width:300px;" >
            
              </div>

              <div class="row">	
              	<div class="col-md-12">
              		
              		<button type="submit" class="btn btn-success form-control" id="logbtn" name="login"><span class="glyphicon glyphicon-log-in"></span> 
          		Log in <i class="fa fa-sign-in"></i>	</button>
          	
              <hr style="background-color:white;" />

              	
              		
              	</div>
              </div>
          	</button>
          </form>
          	</div>
          	</div>
           

          	</div>
          	</div>
          	</center>

</body>
</html>