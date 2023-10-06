<?php

$Name = $_POST['Name'];
$Currency_id = $_POST['currency_id'];


if($Name && $Currency_id){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "Insert into currency_alis (name, currency_id) values ('$Name', $Currency_id)");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Alias/?Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/Dashboard/Alias/?Msg=Did not added");

}




}


?>
