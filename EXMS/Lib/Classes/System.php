<?php 

class System {
    
    
        function path_dir(){
    
    $path = array('/','../', '../../', '../../../', '../../../../');

$URI =  $_SERVER['REQUEST_URI'];

$pathStyleOfPage =0;

for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}
    return $path[$pathStyleOfPage-2];
}
    
        function Get_Site_Title(){
include('DBC.php');

$Result = mysqli_query($con,"select Title, Logo from meta");

if(mysqli_num_rows($Result)>0){


  $Meta = mysqli_fetch_array($Result);

  return $Meta['Title'];
}

  return false;

}
    
function Get_Social_Media_All(){

include('DBC.php');

$Result = mysqli_query($con,"select * from socialmedia");

if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['account'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
}

function Get_Contact_Number_All(){

include('DBC.php');

$Result = mysqli_query($con,"select * from contact_number");

if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['number'];
$Arr[$Row][3] = $Rows['des'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
}
    
function Get_Contact_Number_By_ID($ID){

include('DBC.php');

$Result = mysqli_query($con,"select * from contact_number where id= $ID");

if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['name'];
$Arr[$Row][2] = $Rows['number'];
$Arr[$Row][3] = $Rows['des'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
}
    
function Get_Menus_All(){
include('DBC.php');
  $Result = mysqli_query($con, "select * from menu");

if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Title'];
$Arr[$Row][1] = $Rows['id'];
$Row++;
}

  return $Arr;
}else {

  return false;
}

}
    
        function Get_Profile_All(){
include('DBC.php');
  $Result = mysqli_query($con, "select * from meta");

if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['Title'];
$Row++;
}

  return $Arr;
}else {

  return false;
}




}
    
function Delete_Menu($ID){

            include('DBC.php');
            $Result = mysqli_query($con, "delete from menu where Id = $ID");

if($Result == true){
  header("Location: https://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."Dashboard/Menus/?Status=seccess");

}else{
  header("Location: https://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."Dashboard/Menus/?Status=erorr");

}
            
}
    
    }



?>