<?php




$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];


if($_POST['FirstName']){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "insert into users (first_name, last_name, email, phone) values ('$FirstName', '$LastName', '$Email', '$Phone')");

if($Result == ture){

$ID = Get_ID($Email);
if($ID>0){
  $CreatePass = Insert_Pass($ID, $Password);
  if($CreatePass){
   header("Location: http://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."/Account/login.php");

  }
}else{

}


}

}


?>
