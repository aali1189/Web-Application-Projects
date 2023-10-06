
<?php

$ID = $_GET['ID'];
if($ID){

  include('../DBC.php');
  include('../functions.php');
    
  $Result = mysqli_query($con, "delete from menu where Id = $ID");

  if($Result == true){
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."/Dashboard/Menus/?Status=seccess");

  }else{
    header("Location: http://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."/Dashboard/Menus/?Status=erorr");

  }

}
?>
