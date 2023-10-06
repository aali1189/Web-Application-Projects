<?php include("Theme/Header.php"); ?>

  <div class="title"><p>Dashboard</p></div>
<div class="row">

  <div class="col-lg-3 col-md-3 text-center">

      <h2>
  
   <?php if(Get_Users_All()>1){
    echo count(Get_Users_All());
}else{
    
 echo "0";   
}
          
           ?>
</h2>
 <h4>Users</h4>
</div>
    
<div class="col-lg-3 col-md-3 text-center">

      <h2>
  
   <?php  if(Get_Currency_All()>1){
     echo count(Get_Currency_All());
}else{
    
    echo "0";
}
          
          ?>
</h2>
 <h4>Currencies</h4>
</div>
    
    
    <div class="col-lg-3 col-md-3 text-center">

      <h2>
  
   <?php  if(Get_Orders_All()>1){
     echo count(Get_Orders_All());
}else{
    
    echo "0";
}
          
          ?>
</h2>
 <h4>Orders</h4>
</div>
    
    
    <div class="col-lg-3 col-md-3 text-center">

      <h2>
  
   <?php  if( Get_Exchange_Seller_All()>1){
     echo count( Get_Exchange_Seller_All());
}else{
    
    echo "0";
}
          
          ?>
</h2>
 <h4>Sellers</h4>
</div>


</div>




<?php include("Theme/Footer.php"); ?>
