<?php

$ID = $_POST['ID'];
$Title = $_POST['Title'];

echo $ID . '<br />';
echo $Title . '<br />';
if($ID){

  include('../DBC.php');
  include('../functions.php');
  $Result = mysqli_query($con, "update menu set Title = '$Title' where id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Menus/?Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Menus/?Status=erorr");

  }

}
?>
