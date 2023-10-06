<?php


$Name = $_POST['Name'];
$Account = $_POST['Account'];

if($Name && $Account){
include('../../DBC.php');
include('../../functions.php');
$Result = mysqli_query($con, "Insert into socialmedia (name, account) values ('$Name', '$Account')");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=SM&Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=SM&Msg=Erorr");

}




}


?>
