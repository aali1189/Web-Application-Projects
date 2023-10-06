<?php
 
 class Currency {
     
     
     
     function Get_Currency_All(){
        include('DBC.php');      
$Result = mysqli_query($con, "select id, name, value from currency");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
  
     }
     
     function Get_Currency_By_Id($Id){
  include('DBC.php');
$Result = mysqli_query($con, "select * from currency where id = $Id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
   
}

     function Get_Currency_By_Id_Code($Id_code){
  include('DBC.php');
$Result = mysqli_query($con, "select * from currency where name = '$Id_code'");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['value'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
     
}
     
     function Get_Currency_order_by_name($name){
  include('DBC.php');
$Result = mysqli_query($con, "select id, name, value from currency where name = '$name'");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
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