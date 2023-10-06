<?php 

class Order {
    
    function Get_Orders_All(){
  include('DBC.php');
$Result = mysqli_query($con, "select * from orders");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Buyer_Id'];
$Arr[$Row][2] = $Rows['Seller_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Status'];
$Arr[$Row][5] = $Rows['Amount_order'];
$Arr[$Row][6] = $Rows['Amount_Rate'];
$Row++;
}

  return $Arr;
}else {

  return false;
}
   
}
    
    
}




?>