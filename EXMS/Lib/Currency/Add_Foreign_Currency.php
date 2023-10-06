<?php


$Name = $_POST['Name'];
$Value = $_POST['Value'];

if($Name && $Value){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "Insert into currency (name, value) values ('$Name', '$Value')");

if($Result){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Currency/?Msg=Did not added");

}




}


?>
