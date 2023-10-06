<?php 

class Exchange {
 
    
    function Get_Exchange_Buyer_All(){
        
    include('DBC.php');   
$Result = mysqli_query($con, "select * from Exchange_Buyer");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['User_Id'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
      
    }
    
    function Get_Exchange_Buyer_By_Id($id){
        include('DBC.php');
   
$Result = mysqli_query($con, "select * from Exchange_Buyer where User_Id = $id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['id'];
$Arr[$Row][1] = $Rows['User_Id'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
    
    }
    
    function Get_Exchange_Seller_All(){
           include('DBC.php');

$Result = mysqli_query($con, "select * from Exchange_Seller");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['User_Id'];
$Arr[$Row][2] = $Rows['name'];
$Arr[$Row][3] = $Rows['Address'];
$Arr[$Row][4] = $Rows['currency_Id'];
$Arr[$Row][5] = $Rows['Percentage']; 

$Row++;
}

  return $Arr;
}else {

  return false;
}   
        
    }
    
    function Get_Exchange_Seller_By_Id($id){
         include('DBC.php');
  
$Result = mysqli_query($con, "select * from Exchange_Seller where Id = $id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['User_Id'];
$Arr[$Row][2] = $Rows['name'];
$Arr[$Row][3] = $Rows['Address'];
$Arr[$Row][4] = $Rows['currency_Id'];
$Arr[$Row][5] = $Rows['Percentage']; 

$Row++;
}

  return $Arr;
}else {

  return false;
}
       
    }
    
    function Get_Exchange_Seller_By_Id_menu($id){
   include('DBC.php');

$Result = mysqli_query($con, "select * from Exchange_Seller where User_Id = $id");
    
if(mysqli_num_rows($Result)>0){

$Arr;
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['User_Id'];
$Arr[$Row][2] = $Rows['name'];
$Arr[$Row][3] = $Rows['Address'];
$Arr[$Row][4] = $Rows['currency_Id'];
$Arr[$Row][5] = $Rows['Percentage']; 

$Row++;
}

  return $Arr;
}else {
    return false;
}
  
    }
    
    function Get_Exchange_Items_Cart_All(){
           include('DBC.php');

$Result = mysqli_query($con, "select * from orders");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
    }
    
    function Get_Exchange_Items_Cart_By_Id($id){
           include('DBC.php');

$Result = mysqli_query($con, "select * from orders where Buyer_Id= $id ");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
      
    }
    
    function Get_Exchange_Items_Order_By_Id($id){
           include('DBC.php');

$Get_Id = Get_Exchange_Seller_By_Id_menu($id)[0][0];
$Result = mysqli_query($con, "select * from orders where Seller_Id= $Get_Id ");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
$Row++;
}

  return $Arr;
}else {

  return false;
}   
    }
    
    function Get_Exchange_Items_Cart_Notification_By_Id($id){
           include('DBC.php');

        $Result = mysqli_query($con, "select count(Id) as 'Count' from orders where Buyer_Id = $id and Status = 'Pending'");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Count'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
   
    }
    
    function Get_Exchange_Items_Order_Notification_By_Id($id){
           include('DBC.php');

        $Result = mysqli_query($con, "select count(Id) as 'Count' from orders where Seller_Id = $id and Status = 'Pending'");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Count'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
    }
    
}


?>