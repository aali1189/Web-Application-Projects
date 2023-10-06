<?php 

class Budget {
    
    function Get_Budget_All(){
   include('DBC.php');
$Result = mysqli_query($con, "select * from Budget");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['currency_ID'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
} 
     
}
    
    function Get_Budget_By_Id($id){
    include('DBC.php');
$Result = mysqli_query($con, "select * from Budget where Id = $id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['currency_Id'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
}    
}
    
    function Get_Available_Budget_By_Id($id, $id_cu){
    include('DBC.php');
$Result = mysqli_query($con, "select * from Budget where Id = $id and currency_Id = $id_cu");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['currency_Id'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
}    
}
    
}


?>