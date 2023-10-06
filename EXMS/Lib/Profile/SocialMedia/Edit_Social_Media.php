<?php

$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Account = $_POST['Account'];

if($ID && $Name && $Account){

  include('../../DBC.php');
  include('../../functions.php');
  $Result = mysqli_query($con, "update socialmedia set name = '$Name', account='$Account' where id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Edit&Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Edit&Status=erorr");

  }

}
?>
