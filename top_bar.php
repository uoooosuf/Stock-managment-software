<?php 

require_once('conn.php');
require_once('functions.php');

 if(empty($id)){
 header('location:index.php');
 }else{
 $query="SELECT * FROM users WHERE id = $id ";

      $sqliii=mysqli_query($conn, $query);

      $row = mysqli_fetch_array($sqliii);

      $name = $row['username'];

echo '
<ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow mx-1">
          <h5 style="color:white;">'.$name. '</h5>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>


';
require_once('title_bar.php');

echo '</ul>';
 
 
 }
 ?>

       
      
	  
	  