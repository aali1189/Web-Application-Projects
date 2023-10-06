<?php
include('Theme/Header.php');

Session();

$Arr = profile($_GET['id']);

?>
<div class="Content">
<h3><?php echo $Arr[0][2]; ?></h3>

<div class="row Content-body">
<ul>
<?php
       $CS = $Arr[0][4];                          
    for($j=0; $j<strlen($CS); $j++){ 
    if($CS[$j] === '{' || $CS[$j] === ',' || $CS[$j] === '}' || $CS[$j] === '|' || $CS[$j] === ' '){ }else {{} ?>                 

<li>
<div class="panel panel-primary"> 
    <div class="panel-heading">
                
    <p><?php echo Get_Currency_By_Id($CS[$j])[0][1]; ?> 
    </p>
             <form class="Orders" action="Lib/Cart/index.php" method="post">
<input style="display:none" type="text" name="Buyer_Id" value="<?php echo $_SESSION['ID']; ?>" />
        <input style="display:none" type="text" name="Seller_Id" value="<?php echo $Arr[0][1]; ?>" />
        <input style="display:none" type="text" name="Foreign_cu" value="<?php echo Get_Currency_By_Id($CS[$j])[0][1]; ?>" />
        <input style="display:none" type="text" name="Amount_Rate" value="<?php echo Get_Currency_By_Id($CS[$j])[0][2]; ?>" />
        <input style="display:none" type="text" name="Amount_order" value="<?php echo $_GET['Amount']; ?>" />
        <input style="display:none" type="text" name="Status" value="Pending" />
            
        <input class="btn btn-success" type="submit" value="Buy" />
        </form>   
   
    </div>
    
    <div class="panel-body">
       <p>
           
       <?php echo Get_Currency_By_Id($CS[$j])[0][1]; ?> : 
       <?php echo convert(Get_Currency_By_Id($CS[$j])[0][2], $_GET['Amount']); ?>
       <?php echo '<br />SDG: ' .Convert_Rate_Percentage($_GET['Amount'], $Arr[0][5]); ?>
    
       </p>
        
   

        </div>
    </div>
    


</li>
<?php }} ?>
</ul>


</div>
    
</div>
<?php
include('Theme/Footer.php');

 ?>