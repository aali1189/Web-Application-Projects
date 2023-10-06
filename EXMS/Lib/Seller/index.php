<?php 


$ID = $_POST['ID'];
$Currency_Id = $_POST['Currency_Id'];
$Price = $_POST['Price'];
$Market_Name = $_POST['Market_Name'];
$Address = $_POST['Address'];
//echo strlen($Currency_Id);



if($ID && $Currency_Id && $Price && $Market_Name){
include('../DBC.php');
include('../functions.php');
$Currencies =  "{". implode("", Convert_Format($Currency_Id)) . "}";

$Result = mysqli_query($con, "Insert into Exchange_Seller (User_Id, name, Address, currency_Id, Percentage) values ($ID, '$Market_Name','$Address', '$Currencies', '$Price')");

if($Result){
  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Orders&ID=".$ID."Msg=Success");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Seller&ID=".$ID."Msg=Erorr");

}




}

?>