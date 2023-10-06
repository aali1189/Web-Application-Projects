<?php include('../Theme/Header.php'); ?>


<h2>Rest Password</h2>

<form method="post" >



<input type="text" placeholder="Email" name="Email" />
<br />

<input type="submit" value="Rest Password" />


</form>


<br />



<?php



$Email = $_POST['Email'];

$Password = $_POST['Password'];

if($Email){
	
       include('../Lib/DBC.php');
	$Query = mysqli_query($con, "select * from users where Email = '$Email'"); // searching by email at database
	
	
	
	if(mysqli_num_rows($Query)>0){   //Checking this is email is exsit 
		
		$UserID = 0;
		while($id = $Query->fetch_assoc()){
           $UserID = $id['ID'];
		}
		
		header("Location: http://".$_SERVER['HTTP_HOST']."/CMMS/Account/RESTPass.php?id=". $UserID);

		
			
		
	}else{
		
		// Add new users 
        echo 'Email is not exsit';
		
	}

	
}





?>


<?php include('../Theme/Footer.php'); ?>