<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Availability</title>
    <?php 	require_once('conn.php') ?>

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
        <?php 

        function callPrint(){
          
        echo '

    <center>
      <h2>SUCCESSFULL</h2>
    <h4> DO YOU WANT RECEIPT</h1>
<a href="print.php" class="btn btn-success "  style=" font-size:20px; width:100px;">YES</a>
 &nbsp; &nbsp; &nbsp;
<a href="home.php" class="btn btn-primary "  style=" font-size:20px; width:100px;">NO</a>
<hr/>
    </center>

         ';

        };

         ?>
      </form>

      <!-- Navbar -->
      <?php require_once('top_bar.php'); ?>
    </nav>

    <div id="wrapper">
    	<script type="text/javascript">
  function printlayer(layer){

  var generator = window.open(",'name,");
  var layetext = document.getElementById(layer);
  generator.document.write(layetext.innerHTML.replace("print me"));
  generator.document.close();
  generator.print();
  generator.close();

  }
</script>

<?php 
$id2=$_GET['id'];
 ?>

     


      <!-- Sidebar -->
      <?php require_once("user_bar.php") ?>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
<form method="POST">



	
          	 <div class="card mb-3" id="div-id-name" >
            <div class="card-header">
              <i class="fas fa-table"></i>
              stocks</div>    
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="font-size:10px;">
                      <th>S. No</th>
                      <th>DESCRIPTION</th>
                      <th>SELECT QTY.</th>
                       <th>AVAILABLE QTY.</th>
                      <th>PRICE</th>
                       <th>PROCEED</th>
                        
                       
                    </tr>
                  </thead>
                 
                  <tbody>

            
      <?php 
 $query="SELECT * FROM buy WHERE id = $id2";

      $sql=mysqli_query($conn, $query);

      $row=mysqli_fetch_array($sql);

     

      		$id = $row['id'];
      	$description = $row['description'];
      	$qty = $row['qty'];
      
      	$amount = $row['amount'];
        $date = date('d/m/Y');
        $time = date('h:i A');

       

     

      
      	
     	
     	

echo '

 
                   

                      	    

                      	      <tr style="font-size:10px;">

 					  <td style="font-size:20px;">' . $id . '</td>
                     
                              <td style="font-size:20px; font-family:Exotc350 Bd BT;">'. $description . '</td>   


<td><input type="text" name="buy_qty" class="form-control" value="" placeholder=" " style="width:100px; font-size:20px;">
<td style="font-size:20px;"> ' . $qty . ' </td>


<td style="font-size:20px;"> <input type="text" name="buy_price" class="form-control" value="" placeholder=" " style="width:100px; font-size:20px;" required> </td>






<td><button class="btn btn-primary " data-target="#print_question"  name="submit" style=" font-size:20px;">Proceed</button></td>



                      
                      


 </tr>                     
                    









';
      


        ?>


      	<?php 

	if(isset($_POST['submit'])){

		$buy_qty = $_POST['buy_qty'];
		$price = $_POST['buy_price'];
		

		$buy_amount = $price * $buy_qty;

    if($buy_qty > $qty){

        echo "<center> <div class='alert alert-danger' role='alert'  style='min-width:40%; margin-top:-30px;   position: absolute; margin-left:25%;'>
        <strong>Request not sufficient</strong>!! <br/> its only " . $qty . "  " . $description . " that is available  
      </div></center>";

     


    }elseif(empty($buy_qty)){


   echo "<center> <div class='alert alert-danger' role='alert'  style='min-width:40%; margin-top:-30px;   position: absolute; margin-left:25%;'>
        <strong>Request not sufficient</strong>!! Please Select Quantity</div></center>";




    }else{


      $sql_daily = "INSERT INTO daily_post (description, qty, price, amount, datee, timee) VALUES('$description', '$buy_qty', '$price', '$buy_amount', '$date', '$time')";

      $query_daily = mysqli_query($conn, $sql_daily) or die(mysql_error());

       $sql_history = "INSERT INTO history (description, qty, price, amount, datee, timee) VALUES('$description', '$buy_qty', '$price', '$buy_amount', '$date', '$time')";

      $query_history = mysqli_query($conn, $sql_history) or die(mysql_error());

      $buy_qty_change = $qty - $buy_qty;
     

   $sql_update = "UPDATE buy SET qty = $buy_qty_change WHERE id = $id ";
     $query_update = mysqli_query($conn, $sql_update);  

      callPrint();


    }

		


		

}

	 ?>
       
    </tbody>


         </table>
              </div>

          </form>
            </div>

            <div class="card-footer small text-muted">Monthly update <a href="#" id="print" class="btn btn-secondary" onClick="javascript:printlayer('div-id-name')">Print Report</a></div>
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

  </body>

</html>