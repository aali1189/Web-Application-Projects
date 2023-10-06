<?php
//include('../../Lib/functions.php');
//echo "The path is : " . $path[$pathStyleOfPage-2];
include("../Theme/Header.php");
 ?>
<div class="Body">
  <div class="title">Site profile</div>
  <div class="content">
<h2>Modify Stie Profile</h2>
<form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Profile/Site/Add_profile.php" method="post">
<label>Site Title</label>
<input class="form-control" type="text" name="Site_Title" id="Site_Title" />
<br />
<input class="btn btn-primary" type="submit" value="Update" />


</form>
  </div>

  <div class="content">
    <h2>Profile view</h2>
<?php $arr = Get_Profile_All(); ?>
<table style="border:1px solid #000" class="table">
<tr style="background-color: #fff;">
  <td>ID</td>
  <td>Site title</td>
</tr>

<?php
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
  <td id="<?php echo $arr[$i][0]; ?>"><?php echo $arr[$i][0]; ?></td>
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo $arr[$i][1]; ?></td>
</tr>
<?php }
} ?>
</table>
  </div>


  <div class="content">
<h2>Add Social Media</h2>
<form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Profile/SocialMedia/Add_Social_Media.php"
  method="post">
<label>Social Media</label>

<select class="form-control dropdown" name="Name">
<option></option>
<option value="Facebook">Facebook</option>
<option value="Whatsapp">Whatsapp</option>
</select>
<br />
<label>Account</label>
<input class="form-control" type="text" name="Account" id="Account" />
<br />
<input class="btn btn-primary" type="submit" value="Add" />


</form>
  </div>

  <div class="content">
    <h2>Social Media view</h2>
<?php $arr_Social_Media = Get_Social_Media_All(); ?>
<table style="background-color:#ccc" class="table" >
<tr style="background-color:#fff">
  <td>ID</td>
  <td>Name</td>
  <td>Account</td>
  <td>Edit</td>
  <td>Delete</td>
</tr>

<?php
if($arr_Social_Media>0){
 for($i=0; $i<count($arr_Social_Media); $i++){?>
   <tr>
     <td id="<?php echo $arr_Social_Media[$i][0]; ?>"><?php echo $arr_Social_Media[$i][0]; ?></td>
     <td id="<?php echo $arr_Social_Media[$i][1]; ?>"><?php echo $arr_Social_Media[$i][1]; ?></td>
      <td id="<?php echo $arr_Social_Media[$i][2]; ?>"><?php echo $arr_Social_Media[$i][2]; ?></td>
     <td>
       <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr_Social_Media[$i][0];  ?>, 'ID_SM', 'Edit_Social_Media_Dialog')">Edit</button>
     </td>
       
       <td>
       <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Profile/SocialMedia/Delete_Social_Media.php?ID=<?php echo $arr_Social_Media[$i][0]; ?>" method="post">
         <input class="btn btn-danger"  type="submit" value="Delete" />
       </form>
     </td>
     
   </tr>
<?php }
} ?>
</table>
  </div>


  <div id="Edit_Social_Media_Dialog" class="Edit">

    <button class="Close_btn" onclick="Close_Dialog('Edit_Social_Media_Dialog')">X</button>
    <form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Profile/SocialMedia/Edit_Social_Media.php" method="post">
      <input id="ID_SM" style="display:none" type="text" name="ID"   />
      <br />
      <label>Social Media</label>

      <select class="form-control dropdown" name="Name">
      <option></option>
      <option value="Facebook">Facebook</option>
      <option value="Whatsapp">Whatsapp</option>
      </select>
      <br />
      <label>Account</label>
      <input class="form-control" id="Account" type="text" name="Account" placeholder="Account">
      <br />
      <input class="btn btn-primary" type="submit" value="Edit" />
    </form>

  </div>


  <div class="content">
<h2>Add Contact</h2>
<form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Profile/ContactNumber/Add_Contact_Number.php"
  method="post">
<label>Cellular network</label>

<select class="form-control dropdown" name="Name">
<option></option>
<option value="SUDANI">SUDANI</option>
<option value="MTN">MTN</option>
<option value="ZAIN">ZAIN</option>
</select>
<br />
<label>Contact Number</label>
<input class="form-control" type="text" name="Number" id="Number" />
<br />
<label>Description</label>
<input class="form-control" type="text" name="DES" id="DES" />
<br />
<input class="btn btn-primary" type="submit" value="Add" />


</form>
  </div>




  <div class="content">
    <h2>Contact view</h2>
<?php $arr_Contact_Number = Get_Contact_Number_All(); ?>
<table style="border:2px solid #000; background-color:#ccc" class="table" >
<tr style="background-color:#fff">
  <td>ID</td>
  <td>Name</td>
  <td>Number</td>
  <td>Description</td>
  <td>Edit</td>
  <td>Delete</td>
</tr>

<?php
if($arr_Contact_Number>0){
 for($i=0; $i<count($arr_Contact_Number); $i++){?>
   <tr>
     <td id="<?php echo $arr_Contact_Number[$i][0]; ?>"><?php echo $arr_Contact_Number[$i][0]; ?></td>
     <td id="<?php echo $arr_Contact_Number[$i][1]; ?>"><?php echo $arr_Contact_Number[$i][1]; ?></td>
      <td id="<?php echo $arr_Contact_Number[$i][2]; ?>"><?php echo $arr_Contact_Number[$i][2]; ?></td>
      <td id="<?php echo $arr_Contact_Number[$i][3]; ?>"><?php echo $arr_Contact_Number[$i][3]; ?></td>
      <td>
       <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr_Contact_Number[$i][0];  ?>,'ID_CN','Edit_Contact_Number_Dialog')">Edit</button>
     </td>
     <td>
       <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Profile/ContactNumber/Delete_Contact_Number.php?ID=<?php echo $arr_Contact_Number[$i][0]; ?>" method="post">
         <input class="btn btn-danger" type="submit" value="Delete" />
       </form>
     </td>
   
   </tr>
<?php }
} ?>
</table>
  </div>

  <div id="Edit_Contact_Number_Dialog" class="Edit">

    <button class="Close_btn" onclick="Close_Dialog('Edit_Contact_Number_Dialog')">X</button>
    <form action="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Profile/ContactNumber/Edit_Social_Media.php" method="post">
      <input id="ID_CN" style="display:none" type="text" name="ID"   />
      <br />
      <label>Cantact Number</label>
      <select class="dropdown" name="Name">
      <option></option>
      <option value="SUDANI">SUDANI</option>
      <option value="MTN">MTN</option>
      <option value="ZAIN">ZAIN</option>
      </select>
      <br />
      <label>Number</label>
      <input id="Number" type="text" name="Number" placeholder="Enter your number">
      <br />
      <label>Description</label>
      <input id="DES" type="text" name="DES" placeholder="Enter your des">
      <br />
      <input type="submit" value="Edit" />
    </form>

  </div>

</div>





<?php include("../Theme/Footer.php"); ?>
