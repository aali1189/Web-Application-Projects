<?php
//include('../../Lib/functions.php');
//echo "The path is : " . $path[$pathStyleOfPage-2];
include("../Theme/Header.php");

 ?>
<div class="Body">
  <div class="title">Menu</div>
  <div class="content">
<h2>Add Menu</h2>
<form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Menu/Add_menu.php" method="post">
<label>Menu name</label>
<input class="form-control" type="text" name="Menu_name" id="Menu_name" />

<input class="btn btn-primary" type="submit" value="Add" />


</form>
  </div>

  <div class="content">
    <h2>Menu view</h2>
<?php $arr = Get_Menus_All('Title'); ?>
<table style="background-color: #ccc;" class="table table-bordered">
<tr style="background-color:#fff">
  <td>ID</td>
  <td>Title</td>
  <td>Edit</td> 
  <td>Delete</td>

</tr>

<?php
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo $arr[$i][1]; ?></td>
  <td id="<?php echo $arr[$i][0]; ?>"><?php echo $arr[$i][0]; ?></td>
 
  <td>
    <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr[$i][1];  ?>)">Edit</button>
  </td>
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Menu/Delete_menu.php?ID=<?php echo $arr[$i][1]; ?>" method="post"><input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
</tr>
<?php }
} ?>
</table>



  </div>


  <div id="Edit" class="Edit">

    <button class="Close_btn" onclick="Close_Dialog()">X</button>
    <form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Menu/Edit_menu.php" method="post">
      <label>Title</label>
      <input id="ID" style="display:none" type="text" name="ID"   />
      <input type="text" name="Title"  placeholder="Menu title" />
      <input type="submit" value="Edit" />
    </form>

  </div>
</div>


<?php include("../Theme/Footer.php"); ?>
