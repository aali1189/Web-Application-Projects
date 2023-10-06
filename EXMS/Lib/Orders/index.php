<?php

$Order_Id = $_GET['Order_Id'];
$Buyer_Id = $_GET['Buyer_Id'];
$Seller_Id = $_GET['Seller_Id'];
$Foreign_cu = $_GET['Foreign_cu'];
$Amount_Rate = $_GET['Amount_Rate'];
$Amount_order = $_GET['Amount_order'];
$Status = $_GET['Status'];

if($Order_Id && $Status){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "UPDATE `orders` SET `Buyer_Id`=$Buyer_Id,`Seller_Id`=$Seller_Id,`Foreign_cu`='$Foreign_cu',`Status`='Success',`Amount_order`='$Amount_order',`Amount_Rate`='$Amount_Rate' WHERE Id = $Order_Id and Status = '$Status' ");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/index.php?Name=Orders&Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/index.php?Name=Orders&Msg=Erorr");

}




}
