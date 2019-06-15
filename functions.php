         <?php
        
 $id=$_SESSION['user']; 
  function loggedin(){
    if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {

      return true;
      
    }else{
      return false;
    }
    
  }

if(loggedIn()) {

  $query4="SELECT * FROM users";
      $sql4=mysqli_query($conn, $query4);
      $row4=mysqli_fetch_array($sql4);
    

      



     


}
function logout() {

  session_unset();

  $_SESSION['user'] = '';
     header('location:index.php');

}

$userId = $_SESSION['user'];

?>