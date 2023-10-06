<?php include('../Theme/Header.php'); ?>


<h2>Rest New Password</h2>

<form class="Form"   method="post" >



<input type="text" placeholder="Password" name="Password" />
<br />

<input type="submit" value="Rest Password" />


</form>


<br />



<?php


$Password = $_POST['Password'];

$ID = $_GET['id'];



if($ID && $Password){
   include('../Lib/DBC.php');
    
	$Query = mysqli_query($con, "update users set Password = '$Password' where ID = $ID"); // searching by email at database
	
	if($Query){
		
		header("Location: http://".$_SERVER['HTTP_HOST']."/CMMS/Login.php");

	}
	
	
}





?>


<?php include('../Theme/Footer.php'); ?>