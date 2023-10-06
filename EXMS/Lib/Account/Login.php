<?php

$Email = $_POST['email'];
$Password = $_POST['password'];
//$RememberMe  = $_POST['RememberMe'];

if($Email){
  include('../DBC.php');
  include('../functions.php');

  $Result = mysqli_query($con, "select * from users where email = '$Email' and Password = '$Password'");

  if(mysqli_num_rows($Result)>0){

     $Row = mysqli_fetch_array($Result);
      
      
     if($Row['ID']){
       session_start();
       $_SESSION['Status'] = 'True';
       $_SESSION['ID'] = $Row['ID'];
         
       ?>
      
       <script> window.location.href="/EXMS/?Name=Currency&Amount=1000";  </script>

     <?php }

  }else{
     header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Account/login.php?Erorr=Password is incorrect ");  
      
      
  }

}

 ?>
