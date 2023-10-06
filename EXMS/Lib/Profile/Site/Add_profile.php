<?php


$Title = $_POST['Site_Title'];

if($Title){
include('../../DBC.php');
include('../../functions.php');
$Result = mysqli_query($con, "update meta set Title  = '$Title', Logo = 'Logo.png'");

if($Result == true){

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=SiteName&Action=Add&Msg=Success");

}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=SiteName&Action=Add&Msg=Erorr");

}




}


?>
