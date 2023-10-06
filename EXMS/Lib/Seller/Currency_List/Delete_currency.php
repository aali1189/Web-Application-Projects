<?php

$ID = $_GET['ID'];
$Currency_Id = $_GET['Currency'];
if($ID){

  include('../../DBC.php');
  include('../../functions.php');
    
  $Result = mysqli_query($con, "delete from Budget where currency_Id = $Currency_Id and Id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/?Name=Seller&ID=".$ID."Msg=Success");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/?Name=Seller&ID=".$ID."Msg=Erorr");

  }

}
?>