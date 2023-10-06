<?php

$ID = $_POST['ID'];
$Name = $_POST['Name'];
$Number = $_POST['Number'];
$DES = $_POST['Des'];

if($ID && $Name && $Number && $DES){

  include('../../DBC.php');
  include('../../functions.php');
  $Result = mysqli_query($con, "update contact_number set name = '$Name', number='$Number', Des='$DES' where id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Edit&Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Edit&Status=erorr");

  }

}
?>
