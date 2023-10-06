<?php


$Name = $_POST['Name'];
$Number = $_POST['Number'];
$Des = $_POST['DES'];

if($Name && $Number){
include('../../DBC.php');
include('../../functions.php');

$Result = mysqli_query($con, "Insert into contact_Number (name, number, des) values ('$Name', '$Number', '$Des')");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=CN&Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=CN&Msg=Erorr");

}




}


?>
