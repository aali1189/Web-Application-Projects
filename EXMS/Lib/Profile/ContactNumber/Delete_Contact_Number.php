
<?php

$ID = $_GET['ID'];

if($ID){

  include('../../DBC.php');
  include('../../functions.php')
  $Result = mysqli_query($con, "delete from contact_number where id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Del&Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/Dashboard/Profile/?Type=MS&Action=Del&Status=erorr");

  }

}
?>
