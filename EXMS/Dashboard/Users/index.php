<?php
//include('../../Lib/functions.php');
//echo "The path is : " . $path[$pathStyleOfPage-2];
include("../Theme/Header.php");

 ?>
<div class="Body">
  <div class="title">USERS</div>
  <div class="content">
<h2>Add New User</h2>
<form class="form" action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Account/signup.php?Action=Dashboard_User" method="post">
<label>First Name</label>
<input class="form-control" type="text" name="FirstName"  />
<br />
<label>Last Name</label>
<input class="form-control" type="text" name="LastName" id="Foregin_Currency_value" />
<br />
<label>Email</label>
<input class="form-control" type="text" name="Email" id="Foregin_Currency_value" />
<br />
<label>Phone</label>
<input class="form-control" type="text" name="Phone" id="Foregin_Currency_value" />
<br />
<label>Password </label>
<input class="form-control" type="text" name="Password" id="Foregin_Currency_value" />
<br />

<input class="btn btn-primary" type="submit" value="Add" />


</form>
  </div>

  <div class="content">
    <h2>Users view</h2>
<?php $arr = Get_Users_All(); ?>
<table style="border:1px solid #000; background-color:#ccc" class="table">
<tr style="background-color:#fff">
  <td>ID</td>
  <td>First Name</td>
  <td>Last Name</td>
  <td>Email</td>
  <td>Phone</td>
  <td>Address</td>
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
  <td id="<?php echo $arr[$i][3]; ?>"><?php echo $arr[$i][3]; ?></td>
  <td id="<?php echo $arr[$i][4]; ?>"><?php echo $arr[$i][4]; ?></td>
  <td id="<?php echo $arr[$i][5]; ?>"><?php echo $arr[$i][5]; ?></td>
    <td>
    <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr[$i][0];  ?>,'ID_Foregin_Currency','Edit_Foregin_Currency_Dialog')">Edit</button>
  </td>
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Currency/Delete_Foregin_Currency.php?ID=<?php echo $arr[$i][0]; ?>" method="post"><input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
  
</tr>
<?php }
} ?>
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


<?php include("../Theme/Footer.php"); ?>
