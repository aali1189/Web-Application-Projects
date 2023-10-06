<?php
//include('../../Lib/functions.php');
//echo "The path is : " . $path[$pathStyleOfPage-2];
include("../Theme/Header.php");

 ?>
<div class="Body">
  <div class="title">Foregin Currency</div>
  <div class="content">
<h2>Add Foregin Currency</h2>
      
<form class="form-horizontal" action="<?php echo $path[$pathStyleOfPage-1]; ?>Lib/Currency/Add_Foreign_Currency.php" method="post">
    <div class="form-group">
    <label>Foregin Currency name</label>
<input class="form-control" type="text" name="Name" id="Foregin_Currency_name" />
    </div>
<div class="form-group">
    <label>Price</label>
<input class="form-control" type="text" name="Value" id="Foregin_Currency_value" />
    </div>
<input type="submit" class="btn btn-primary" value="Add" />


</form>
  </div>

  <div class="content">
    <h2>Foregin Currency view</h2>
<?php $arr = Get_Currency_All(); ?>
<table style="border:1px solid #000; background-color:#ccc" class="table">
<tr style="background-color:#fff">
  <td>ID</td>
  <td>Name</td>
  <td>Price</td>
  <td>Edit</td>
  <td>Delete</td>
</tr>

<?php
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
  <td id="<?php echo $arr[$i][0]; ?>"><?php echo $arr[$i][0]; ?></td>
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo $arr[$i][1]; ?></td>
  <td id="<?php echo $arr[$i][2]; ?>"><?php echo $arr[$i][2]; ?></td>
    <td>
    <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr[$i][0];  ?>,'ID_Foregin_Currency','Edit_Foregin_Currency_Dialog')">Edit</button>
  </td>
    
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-1] ;?>Lib/Currency/Delete_Foregin_Currency.php?ID=<?php echo $arr[$i][0]; ?>" method="post"><input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
  
</tr>
<?php }
} ?>
</table>



  </div>


  <div id="Edit_Foregin_Currency_Dialog" class="Edit">

    <button class="Close_btn" onclick="Close_Dialog('Edit_Foregin_Currency_Dialog')">X</button>
    <form action="<?php echo $path[$pathStyleOfPage-1]; ?>Lib/Currency/Edit_Foreign_Currency.php" method="post">
      <label>Name</label>
      <input id="ID_Foregin_Currency" style="display:none" type="text" name="ID"  />
      <input type="text" name="Name"  placeholder="Foregin Currency Name" />
    <label>Price</label>
    <input type="text" name="Value"  placeholder="Foregin Currency Price" />
      <input type="submit" value="Edit" />
    </form>

  </div>
</div>


<?php include("../Theme/Footer.php"); ?>
