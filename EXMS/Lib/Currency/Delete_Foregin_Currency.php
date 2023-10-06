
<?php

$ID = $_GET['ID'];
if($ID){

  include('../DBC.php');
  include('../functions.php');
    
  $Result = mysqli_query($con, "delete from currency where Id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Status=error");

  }

}
?>
