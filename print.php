<!DOCTYPE html>
<html>
<head>

	

	 <?php 	require_once('conn.php') ?>
	<title>Print Receipt</title>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

</head>
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
<style>
	.mobile{
		font-size:10px;
		border-left:30px solid black;
		border-right: 30px solid black;
		width:400px;
		border-radius:30px;
		font-family:arial black;

	}

	.dealers { 
		background-color:black;
			width:1000px;
			color:white;
	 }

	 .cash {

	 		background-color:white;
			width:300px;
			color:black;
			border-radius:30px;
			border:2px solid black;

	 }
	 h5 {
	 	font-size:20px;
	 	font-family:arial black;

	 }
	 th {
	 	 font-size:20px;
	 }
	 td {
	 	 font-size:20px;
	 }
</style>
<body>


	
<?php 


$query="SELECT MAX(id) as max_id FROM history";

      $sql=mysqli_query($conn, $query);

      $row = mysqli_fetch_array($sql);
      $max_id = $row['max_id'];
     


 $sql_query="SELECT * FROM history WHERE id = $max_id";

      $mysql=mysqli_query($conn, $sql_query);

      $row2=mysqli_fetch_array($mysql);
   
      $id = $row2['id'];
      	$description = $row2['description'];
      	$qty = $row2['qty'];
      	$price = $row2['price'];
      	$amount = $row2['amount'];
      	$date = $row2['datee'];

      	

  ?>

  <?php

$number = $amount;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $result = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
 
 ?> 
<div class="container" id="div-id-name">
<center> <input type="button" class="btn btn-primary" value="return to previous page page" onclick="javascript:history.go(-1)"></a></center>
<br>
<br>
	<center>
<h1 style="font-size:40px; font-family:arial black">MAS-SOURCES LTD.</h1>
<div class="mobile">
	<h5 style="font-family:AdineKirnberg;">ENDLESS POSSIBILITIES</h5>
</div>


<div class="row">
<div class="col-md-4" style=""><h5 style="text-align:left;">OFFICE ADDRESS:</h5>
<p style="font-family:arial black; text-align:left;">14A-155A Shopping Complex, <br/> Jimeta Adamawa State, Nigeria. <br/>email: massource@gmail.com</p>
</div>
<div class="col-md-4">
	<br>
	<div class="cash">
	<h4>CASH/CREDIT INVOICE</h4>
</div></div>
<div class="col-md-4"><h5 style="text-align:right;">TEL:<br>08123827311,<br>08065628300,<br></h5></div>
</div>
</center>
<div class="row">

		<div class="col-md-8">
			<h5>Name: &nbsp;<input type="text" style="width:500px;" name="" placeholder="Customer Name">
	<br>Address &nbsp;<input type="text" style="width:500px;" name="" placeholder=""><br>
Phone No:&nbsp;<input type="text" style="width:500px;" name="" placeholder="">
	</h5>
		</div>
		<div class="col-md-4">
			
			<H5 style="">DATE: <?php echo $date; ?></H5>
		</div>
	</div>

	<center>
		<div class="container 2 " style="border:2px solid black;" >
			<table ">
<tr >
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr style="font-size:10px;">
                    
                      <th>QTY</th>
		<th>DESCRIPTION</th>
		<th>UNIT PRICE</th>
		<th>AMOUNT</th>
                        
                       
                    </tr>
	
</tr>
<tr>
<td><?php echo $qty; ?></td>
<td><?php echo $description; ?></td>
<td><?php echo number_format($price); ?></td>
<td><?php echo number_format($amount); ?></td>
</tr>



<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td style="font-weight:bold; text-align:right; font-size:20px;">TOTAL= </td>
<td>N<?php echo number_format($amount); ?></td>
</tr>



	</table>
<h6 style="text-align:left;">Received the above Good condition<br>no refund of money after Payment</h6>
		</div>
	</center>
	<hr/>

<div class="row">
	<div class="col-md-12">
		<h3>AMOUNT IN WORD: <u><?php  echo $result . "Naira  " . $points . " Only"; ?></u> </h3> 
	</div>
</div>
<br>
<br>
<div class="row">

	<div class="col-md-6">
		<h4 style="text-align:center;">______________________________________________<br/>Customer's Signature
			<br> <br>BALANCE <input type="text" name="" ></h4>
	</div>
		<div class="col-md-6">
		<h4  style="text-align:center;">______________________________________________<br/>Maneger's Signature
			<br> <br> <input type="text" name="" >
		</h4>

	</div>
	
</div>


<center> <a href="" onclick="window.print()" class="btn btn-success">PRINT</a></center>
<br>
<hr>

</div>
</body>

