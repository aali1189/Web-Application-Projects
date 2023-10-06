<?php include('../Theme/Header.php');?>
<div class="Form">
    <h3> Sign Up </h3>
<form id="SignUp" method="post" >

<input class="form-control" type="text" name="FirstName" placeholder="First Name" />
<br />
<input class="form-control" type="text" name="LastName"  placeholder="Last Name" />
<br />
<input class="form-control" type="email" name="Email"  placeholder="example@example.com" />
<br />
<input class="form-control" type="number" name="Phone" placeholder="+249 0912345670" />
<br />
<input class="form-control" type="text" name="Address" placeholder="State - city" />
<br />
<input class="form-control" type="password" name="Password" id="password" placeholder="********" />
<br />
<br />
<input class="btn" type="submit" title="Sign Up" text="Sign Up" value="Sign Up" />






</form>

</div>


<?php


$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Address = $_POST['Address'];
$Password = $_POST['Password'];


if($_POST['FirstName']){
    
include('../Lib/DBC.php');


$Result = mysqli_query($con, "insert into Users (FName, LName, Email, Phone, Address, Password) values ('$FirstName', '$LastName', '$Email', '$Phone','$Address', '$Password')");

if($Result === true){?>

<script> window.location.href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CMMS/Account/login.php";  </script>

   

 <?php } } ?>




<?php include('../Theme/Footer.php')?>
