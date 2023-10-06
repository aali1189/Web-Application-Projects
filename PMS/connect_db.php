<?php

//error_reporting (E_ALL ^ E_NOTICE ^ E_WARNING);
$con=new mysqli('localhost','root','rootroot','pharmacyms' )or die("cannot connect to server");

//if (!$con) {
//    die("Connection failed: " . mysqli_connect_error());
//}else{
// echo "Connected successfully";   
//}

if(!$con->select_db('pharmacyms')){
  die("cannot connect to database" . mysqli_error());  
}else{
    
}
 

?>
