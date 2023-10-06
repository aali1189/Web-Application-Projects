<?php 

class User {
    
    function Get_User_By_Id($id){
  include('DBC.php');
$Result = mysqli_query($con, "select * from users where id = $id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['first_name'];
$Arr[$Row][2] = $Rows['last_name'];
$Arr[$Row][3] = $Rows['email'];
$Arr[$Row][4] = $Rows['phone'];
$Arr[$Row][5] = $Rows['address'];
$Arr[$Row][6] = $Rows['gender'];

$Row++;
}

  return $Arr;
}else {

  return false;
} 
    
}
    
    
    function Get_Users_All(){
 include('DBC.php');
$Result = mysqli_query($con, "select * from users");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['first_name'];
$Arr[$Row][2] = $Rows['last_name'];
$Arr[$Row][3] = $Rows['email'];
$Arr[$Row][4] = $Rows['phone'];
$Arr[$Row][5] = $Rows['address'];
$Arr[$Row][6] = $Rows['gender'];

$Row++;
}

  return $Arr;
}else {

  return false;
}    
    
}
    
    
    function Get_ID($Email){
include('DBC.php');

$Result = mysqli_query($con,"select Id from users where email = '$Email'");

if(mysqli_num_rows($Result)>0){

  $ID = mysqli_fetch_array($Result);

  return $ID['Id'];
}

return 0;

}
    
    
    function Insert_Pass($ID, $Pass){

include('DBC.php');

$Result = mysqli_query($con,"Insert into pass (Id, Password) values ($ID, '$Pass')");

if($Result == true){
  return true;
}

return false;

}

    
    
    
}



?>