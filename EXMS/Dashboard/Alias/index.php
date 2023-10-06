<?php
include("../Theme/Header.php");

 ?>
<div class="Body">
  <div class="title">Foregin Currency  Alias</div>
  <div class="content">
<h2>Add Foregin Currency Alias</h2>
      
<form class="form-horizontal" action="<?php echo $path[$pathStyleOfPage-1]; ?>Lib/Currency/Add_Foreign_Currency_Alis.php" method="post">
    <select class="form-control" name="currency_id">
        
    <?php $CA = Get_Currency_All(); 
        for($i=0;$i<count($CA);$i++){ ?>
<option value="<?php echo $CA[$i][0]; ?>"><?php echo $CA[$i][1]; ?></option>
    <?php } ?>
    </select>
    
    <div class="form-group">
    <label>Foregin Currency Alis name</label>
<input class="form-control" type="text" name="Name" id="Foregin_Currency_name" />
    </div>

<input type="submit" class="btn btn-primary" value="Add" />


</form>
  </div>
    <br />
  <div class="title">View Foregin Currency Alias</div>
  <div class="content">
<h2>Foregin Currency Alias</h2>

<form method="post">
    <div class="form-group">
    
    
      <select class="form-control" name="currency_id">
        
    <?php $CA = Get_Currency_All(); 
        for($i=0;$i<count($CA);$i++){ ?>
<option value="<?php echo $CA[$i][0]; ?>"><?php echo $CA[$i][1]; ?></option>
    <?php } ?>
    </select>
    <input type="submit" class="btn btn-primary" value="Search" />
    </div>
    </form>
    
    
<?php 
  $Currency_id =   $_POST['currency_id'];
    if($Currency_id)
    Get_Currency_Alias_By_Id($Currency_id);
    {?>

  <div class="content">
    <h2>Foregin Currency Alias view</h2>
<table style="border:1px solid #000; background-color:#ccc" class="table">
<tr style="background-color:#fff">
  <td>ID</td>
  <td>Name</td>
  <td>Edit</td>
  <td>Delete</td>
</tr>

<?php
 $Arr = Get_Currency_Alias_By_Id($Currency_id);
        
        
if($Arr>0){
 for($i=0; $i<count($Arr); $i++){?>
<tr>
  <td id="<?php echo $Arr[$i][0]; ?>">
   <?php echo $Arr[$i][0]; ?></td>
  <td><?php echo $Arr[$i][2]; ?></td>
  
      <td>
<button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $Arr[$i][0]; ?>,'ID_Foregin_Currency','Edit_Foregin_Currency_Dialog')">Edit
</button>
  </td>
    
    <td>
<form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Currency/Delete_Foregin_Currency.php?ID=<?php echo $Arr[$i][0]; ?>" method="post">
<input class="btn btn-danger" type="submit" value="Delete" name="Delete" />
</form>
  </td>
    

    
</tr>
<?php }

}?>
</table>



  </div>


  <div id="Edit_Foregin_Currency_Dialog" class="Edit">

    <button class="Close_btn" onclick="Close_Dialog('Edit_Foregin_Currency_Dialog')">X</button>
    <form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Currency/Edit_Foreign_Currency.php" method="post">
      <label>Name</label>
      <input id="ID_Foregin_Currency" style="display:none" type="text" name="ID"  />
      <input type="text" name="Name"  placeholder="Foregin Currency Name" />
    <label>Price</label>
    <input type="text" name="Value"  placeholder="Foregin Currency Price" />
      <input type="submit" value="Edit" />
    </form>

  </div>
</div>
 <?}?>
    
</div>


<?php include("../Theme/Footer.php"); ?>