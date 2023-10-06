<?php

$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Value = $_POST['Value'];

if($ID && $Name && $Value){

  include('../DBC.php');
  include('../functions.php');
  $Result = mysqli_query($con, "update currency set name = '$Name', value = '$Value' where id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Status=error");

  }

}
?>
