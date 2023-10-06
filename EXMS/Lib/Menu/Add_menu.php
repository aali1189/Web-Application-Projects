<?php


$Title = $_POST['Menu_name'];

if($Title){
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "Insert into menu (Title, URI) values ('$Title', 'none')");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Menus/?Msg=Successfully");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Menus/?Msg=Did not added");

}




}


?>
