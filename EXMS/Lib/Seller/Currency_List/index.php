<?php 

$ID = $_POST['ID'];
$Currency = $_POST['Currency'];
$Budget = $_POST['Budget'];

if($ID && $Currency && $Budget){
include('../../DBC.php');
include('../../functions.php');

$Result = mysqli_query($con, "Insert into Budget (Seller_ID, currency_Id, value) values ($ID, $Currency, '$Budget')");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Seller&ID=".$ID."Msg=Success");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Seller&ID=".$ID."Msg=Erorr");

}




}
?>