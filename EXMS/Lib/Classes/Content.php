<?php 


class Content {
    
    
    function Exchange(){?>
        
       
<div class="Content">




<h3>Exchange</h3>

<div class="row Content-body">
    
  <div class="Amount">
<?php if($_GET['Amount']>0){ ?>
    
    <h1><?php echo $_GET['Amount']; ?> <span>SDG</span></h1> 
    <?php } ?>
</div>
    
    
    <div class="form">
    
    
    
   
    <form method="get" action="">
<input class="form-control" style="display:none" id="Name" type="text" name="Name" value="<?php echo $_GET['Name']; ?>"    />    
<input class="form-control" id="Amount" type="number" name="Amount"    />
<span class="control-label">SDG</span>
<input class="btn btn-prmary" type="submit" value="Convert"  />  
 </form>
        
    </div>
<ul>
<?php for($i=0; $i<count(Get_Exchange_Seller_All()); $i++){ 
    $Seller_currency = Get_Exchange_Seller_All()[$i][4] . ' | ';
           if(Get_Exchange_Seller_All()[$i][1] == $_SESSION['ID']){}else{
    ?>
<li>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>/EXMS/view.php?Page=profile&id=<?php echo Get_Exchange_Seller_All()[$i][0]; ?>&Amount=<?php echo $_GET['Amount']; ?>">
<div class="panel panel-primary"> 
    <div class="panel-heading">
    <?php echo Get_Exchange_Seller_All()[$i][2]; ?> 
    </div>
    
    <div class="panel-body">
        <?php for($j=0; $j<strlen($Seller_currency); $j++){ 
    if($Seller_currency[$j] === '{' || $Seller_currency[$j] === ',' || $Seller_currency[$j] === '}' || $Seller_currency[$j] === '|' || $Seller_currency[$j] === ' '){ }else { ?>
    <p><?php echo Get_Currency_By_Id($Seller_currency[$j])[0][1] . ' : '; ?> 
       <?php 
       
echo convert(Get_Currency_By_Id($Seller_currency[$j])[0][2], $_GET['Amount']);
//+ Get_Exchange_Seller_All()[$i][5];
        ?></p>
        
    <?php } }?>
    </div>
    </div>
    </a>
</li>
<?php }}?>
</ul>



 
</div>
 
        
<?php }
    
    function Currency(){ ?>
        
                
<div class="Content">

<h3>Currency</h3>


<div class="row Content-body">
    
<div class="Amount">
<?php if($_GET['Amount']>0){ ?>
    
    <h1><?php echo $_GET['Amount']; ?> <span>SDG</span></h1> 
    <?php } ?>
</div>
    
   <div class="form">
    
       <form method="get">
 <input class="form-control" style="display:none" id="Name" type="text" name="Name" value="Currency"    />     
<input class="form-control" id="Amount" type="number" name="Amount"    />
<span class="control-label">SDG</span>
<input class="btn btn-prmary" type="submit" value="Convert"  />  
 </form>
       
    </div>
    

    
<ul>
<?php 
              if(Get_Currency_All()>0){          
for($i=0; $i<count(Get_Currency_All()); $i++){  ?>
<li>
<div class="panel panel-primary"> 
    <div class="panel-heading">
    <?php echo Get_Currency_All()[$i][1]; ?> 
    </div>
    
    <div class="panel-body">
    <p><?php echo Get_Currency_All()[$i][1] . ' : '; ?> 
       <?php echo convert(Get_Currency_All()[$i][2], $_GET['Amount']); ?>
    </p>
        
    </div>
    </div>
    
</li>
<?php }} ?>
</ul>


    
</div>
</div> 
  
    <?php }
    
    function Blackmarket(){ ?>
  
<div class="Content"> 
<h3>Blackmarket</h3>

<div class="row Content-body">
    
<div class="Amount">
<?php if($_GET['Amount']>0){ ?>
    
    <h1><?php echo $_GET['Amount']; ?> <span>SDG</span></h1> 
    <?php } ?>
</div>
    
   <div class="form">
    
 <form method="get">
 <input class="form-control" style="display:none" id="Name" type="text" name="Name" value="Blackmarket" />    
 <span id="currency_name" style="width:100px;left:5px" class="control-label">USD</span>
 <input style="text-align: center" class="form-control" id="Amount" type="number" name="Amount" />
     
 <span class="control-label">SDG</span>
 <input class="btn btn-prmary" type="submit" value="Convert"  /> 
 </form>
       
    </div>
    
    
 <!--    Blackmarket USD list -->
    

<div class="col-lg-6 col-md-6">
    <?php
for($Alias=0; $Alias<count(Get_Currency_Alias_By_Id(1)); $Alias++){ ?>
<div style="margin-top:0px" class="panel panel-primary"> 
    <div  class="panel-heading">
    <p onclick="Alias('<?php echo Get_Currency_Alias_By_Id(1)[$Alias][2]; ?>')" >
<?php echo Get_Currency_Alias_By_Id(1)[$Alias][2];?> 
       </p>
    </div>
    

    </div>
    
    <?php } ?>
    </div>
   



<!--    Sellers USD list     -->
<div class="col-lg-6 col-md-6">
    <?php for($i=0; $i<count(Get_Exchange_Seller_All()); $i++){ 
    $Seller_currency = Get_Exchange_Seller_All()[$i][4] . ' | ';
           if(Get_Exchange_Seller_All()[$i][1] == $_SESSION['ID']){}else{
    ?>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>/EXMS/view.php?Page=profile&id=<?php echo Get_Exchange_Seller_All()[$i][0]; ?>&Amount=<?php echo $_GET['Amount']; ?>">
<div class="panel panel-primary"> 
    <div class="panel-heading">
    <?php echo Get_Exchange_Seller_All()[$i][2]; ?> 
    </div>
    
    <div class="panel-body">
        <?php for($j=0; $j<strlen($Seller_currency); $j++){ 
    if($Seller_currency[$j] === '{' || $Seller_currency[$j] === ',' || $Seller_currency[$j] === '}' || $Seller_currency[$j] === '|' || $Seller_currency[$j] === ' '){ }else { ?>
        
 
<?php //if(Get_Currency_By_Id($Seller_currency[$j])[0][1] === 'USD'){ ?>
<p><?php //echo Get_Currency_By_Id($Seller_currency[$j])[0][1] . ' : '; ?> 
<?php //echo convert(Get_Currency_By_Id($Seller_currency[$j])[0][2], $_GET['Amount']); ?></p>
        
    <?php  } }?>
    </div>
    </div>
    </a>
    
    <?php }}?>
</div>
    
    




</div>
 </div>
<!--</div>-->
 

    <?php }
 
    function Contact(){?>
        
       
<div class="Content">

<h3>Contact</h3>

<div class="row Content-body">

</div>
    
</div>

 
   <?php }
    
    function Cart(){?>
        
    
<div class="Content">

<h3>Cart</h3>

    <?php 
   
       if(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])){ 
    ?>
<div class="row Content-body">

    
<ul>
<?php 
         
for($i=0; $i<count(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])); $i++){ 
    ?>
<li>
<div class="panel panel-primary"> 
    <div class="panel-heading">
    <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][3]; ?> 
    </div>
    
    <div class="panel-body">
        <p>
        
<?php echo "Seller : " . Get_Exchange_Seller_By_Id(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][1])[0][2]; ?>
        </p>
    <p>
<?php 
    
  echo "SDG : " .
Convert_Rate_Percentage(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][4],Get_Exchange_Seller_By_Id(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][1])[0][5]); ?>
        
    </p>
        
    <p>
       <?php 
   
    echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][3] ." : ".convert(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][5]);
    
     ?>
    </p>

      
        <div>
           <?php if(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]==='Success'){ ?> 
            <div class="alert alert-success" role="alert">
            <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]; ?>
            </div>
            <?php }else{ ?>
        <div class="alert alert-warning" role="alert">
            <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]; ?>
            </div>
           <?php } ?>
        </div>
    </div>
    </div>
    
</li>
<?php } ?>
</ul>


    
</div>
    <?php }else{ ?>
           
     <div class="panel panel-primary"> 
    <div class="panel-heading">
        <p>No resulit</p>
           </div>
           </div>
    <?php   } ?>
</div> 

    
        
   <?php }
    
    function Orders(){ ?>
    
<div class="Content">

<h3>Orders</h3>

<div class="row Content-body">

    
<ul>

<?php 
// Refresh        
if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])>0){
    
for($i=0; $i<count(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])); $i++){ 
    ?>
<li>
<!--
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
-->
<div class="panel panel-primary"> 
    <div class="panel-heading">
 
     <form class="Orders" action="Lib/Orders/index.php" method="get">
        <label><?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
        ?>
         </label>
         
         <label class="text-right">
        <?php
//    Budget - order
//    echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3] ." : ". (convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5]));
    
 $Code_cu = Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
 $Convert_cu = convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5]);
    
    echo "Get budget : " . (Get_Available_Budget_By_Id($_SESSION['ID'], Get_Currency_By_Id_Code($Code_cu)[0][0])[0][2] - ($Convert_cu));
        ?>
        
         </label>
         
<input style="display:none" type="text" name="Order_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][0];
        ?>" />
<input style="display:none" type="text" name="Seller_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][1];
        ?>" />   
<input style="display:none" type="text" name="Buyer_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2];
        ?>" />
<input style="display:none" type="text" name="Foreign_cu" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
        ?>" />        
<input style="display:none" type="text" name="Amount_order" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4];
        ?>" /> 
<input style="display:none" type="text" name="Amount_Rate" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5];
        ?>" />
    <input style="display:none" type="text" name="Status" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6];
        ?>" />
    
    <input style="display:<?php if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6] === 'Pending'){ echo 'block'; }else{ echo 'none'; } ?>" type="submit" class="btn btn-danger" value="Appliy" />
    </form>   
     
    </div>
    
    <div class="panel-body">
    <p class="alert alert-success"><?php echo  Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][1] . " " .Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][2]; ?> </p>
        
 
        
    <p>Email : <?php echo  Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][3]; ?></p>
    <p>
       <?php 
    
    echo "SDG : " . Convert_Rate_Percentage(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][5]); ?>
    </p>
    <p>
       <?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3] ." : ". convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5])  ;
    
    //convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4]); ?>
    </p>
      
        <div>
        <?php if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6] === 'Pending'){?>
        <div class="alert alert-warning" role="alert">
        <p>Pending</p>
            </div>
        <?php }else {?>
             <div class="alert alert-success" role="alert">
        <p>Applied</p>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
    
</li>
<?php }}else{ ?>
    <p>No result</p>
<?php } ?>

</ul>


    
</div>
</div> 
    

    <?php }
    
    function Seller(){ ?>
        
       <div class="Content">

<h3>Become a seller</h3>

<div class="row Content-body">
<!--
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
-->
<div class="panel panel-primary"> 
    <div class="panel-heading">

     <h2>Seller subscription</h2>
    </div>
    
    <div class="panel-body">
        <div class="Budget-border">
        
           <form class="Seller" action="Lib/Seller/Currency_List/index.php" method="post">
<!--         Get user id -->
        <input style="display:none" name="ID" value="<?php echo Get_User_By_Id($_SESSION['ID'])[0][0];
        ?>" />
          <label>Currency</label> 
        <select class="form-control" name="Currency">
            <?php if(Get_Currency_All()>0){
                      for($i=0;$i<count(Get_Currency_All());$i++){?>
    <option value="<?php echo Get_Currency_All()[$i][0]; ?>"><?php echo Get_Currency_All()[$i][1]; ?></option>
               <?php }}?>
               </select>
          <label>Budget</label> 
         <input type="text" class="form-control" name="Budget"  />
    <input class="btn btn-primary" type="submit" value="Add" />
    
    </form>  
            
<div class="List-view">
<table class="table">
<tr>
  <td>Currency</td>
  <td>Budget</td>
  <td>Delete</td>
</tr>

<?php
                      
if(Get_Budget_By_Id($_SESSION['ID'])){
$arr = Get_Budget_By_Id($_SESSION['ID']);
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
<!--    Currencies -->
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo  Get_Currency_By_Id($arr[$i][1])[0][1]; ?></td>
<!--    Budget -->
  <td id="<?php echo $arr[$i][2]; ?>"><?php echo $arr[$i][2]; ?></td>
<!--    Delete  -->
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Seller/Currency_List/Delete_Currency.php?ID=<?php echo $arr[$i][0]; ?>&Currency=<?php echo $arr[$i][1]; ?>" method="post">
        <input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
</tr>
<?php }
}} ?>
</table>        
</div>
          </div>
        
        
        <div class="Budget-border">
                   <form class="Seller" action="Lib/Seller/index.php" method="post">
<!--         Get user id -->
        <input style="display:none" name="ID" value="<?php echo Get_User_By_Id($_SESSION['ID'])[0][0];
        ?>" />
<!--        Currency list -->
<input style="display:none" name="Currency_Id" value="<?php for($i=0; $i<count($arr); $i++){ if($i<count($arr)-1){echo $arr[$i][1] . " "; }else {echo $arr[$i][1]; } } ?>" />
                       
          <label>Price</label> 
       <input type="number" class="form-control" name="Price"  />
          <label>Market Name</label> 
         <input type="text" class="form-control" name="Market_Name"  />
         <label>Address</label> 
         <input type="text" class="form-control" name="Address"  />
    <input class="btn btn-danger" type="submit" value="Subscription" />
    
    </form>  
           
        </div>
    </div>
    </div>
    



    
</div>
</div> 

    <?php }
    
    function PageNotFound(){ ?>
        
  
       <div class="Content">

<h3>Page Not Found ...</h3>

<div class="row Content-body">

<div class="panel panel-primary"> 
 
    
    <div class="panel-body">
    
    <h2>Page Not Found ... </h2>    

    </div>
    </div>
    



    
</div>
</div> 

   <?php }
    
    
}




?>