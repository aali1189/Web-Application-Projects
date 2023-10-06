<?php

$Buyer_Id = $_POST['Buyer_Id'];
$Seller_Id = $_POST['Seller_Id'];
$Foreign_cu = $_POST['Foreign_cu'];
$Amount_Rate = $_POST['Amount_Rate'];
$Amount_order = $_POST['Amount_order'];
$Status = $_POST['Status'];

//echo 'Buyer : '.$Buyer_Id;
if($Buyer_Id && $Seller_Id){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "INSERT INTO `orders` (`Buyer_Id`, `Seller_Id`, `Foreign_cu`, `Status`, `Amount_order`, `Amount_Rate`) VALUES ($Buyer_Id,$Seller_Id,'$Foreign_cu','$Status','$Amount_order','$Amount_Rate')
");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/view.php?Page=profile&id=$Seller_Id&Amount=$Amount_order&Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/View/?id=$Seller_Id&Amount=$Amount_order&Msg=Erorr");

}




}else{
    
}

