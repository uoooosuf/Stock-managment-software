
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

     


      

      }


     ?>



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
                      <th>QTY.</th>
                      
                       <th>AMOUNT</th>
                  
                       
                    </tr>
                  </thead>
                 
                  <tbody>
       
      <?php 
 $query="SELECT * FROM buy";

      $sql=mysqli_query($conn, $query);

      while($row=mysqli_fetch_array($sql)){

      	$id = $row['id'];
      	$description = $row['description'];
      	$qty = $row['qty'];
      	$price = $row['price'];
      	$amount = $row['amount'];

        

    
        
      	      	
echo '
<tr>

 					  <td>' . $id . '</td>
                      <td>' . $description . '</td>
                      <td>' . $qty . '</td>
                     
                      <td>' . $amount . '</td>
                     

                      	    </tr>









';
      }

        ?>

    </tbody>
                </table>
              </div>
            </div>

            <div class="card-footer small text-muted">Monthly update <a href="#" id="print" class="btn btn-secondary" onClick="javascript:printlayer('div-id-name')">Print Report</a>

<h4 style="float:right;"> TOTAL AMOUNT =
         <?php 
        $mysqli="SELECT SUM(amount) AS total_amount FROM buy";

        $sql=mysqli_query($conn, $mysqli);

        $all = mysqli_fetch_array($sql);

        $total_amount = $all['total_amount'];


$total = number_format($total_amount);
echo $total;

 ?>
</h4>

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
