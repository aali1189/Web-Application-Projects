<?php

$Currency_id = $_POST['currency_id'];


if($Currency_id){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "select  * from currency_alis where currency_id=$Currency_id");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Alias/?Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Alias/?Msg=Did not added");

}




}


?>
