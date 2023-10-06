<?php include('../Theme/Header.php'); ?>

<div class="Form login">
<?php

if(isset($_GET['Erorr'])){

  echo '<label style="color:red">'. $_GET['Erorr'] .'</label>';
}
?>
    
<h3> Sign in</h3>

<form  method="post">
<input class="form-control" type="email" name="email" id="email" placeholder="Example@example.com" />
<br />
<input class="form-control" type="password" name="password" id="passsword" placeholder="password" />
<br />
<input type="checkbox" name="RememberMe" id="RememberMe" />
<label>Remember Me</label>
<br />
<input class="btn" type="submit" value="Sign In" />
<br />
<a class="Danger" target="_blank" href="RestPassword.php"> ? Password Reset </a>
  <br /> 
  <br />
 <a class="primary" target="_blank" href="Signup.php">Sign Up</a>   
</form>
    
    
</div>

<?php

$Email = $_POST['email'];
$Password = $_POST['password'];

if($Email){
  include('../Lib/DBC.php');

  $Result = mysqli_query($con, "select * from Users where Email = '$Email' and Password = '$Password'");

  if(mysqli_num_rows($Result)>0){

     $Row = mysqli_fetch_array($Result);
      
      
     if($Row['ID']){
       session_start();
       $_SESSION['Status'] = 'True';
       $_SESSION['UserID'] = $Row['ID'];
       $_SESSION['Email'] = $Row['Email'];
       $_SESSION['Phone'] = $Row['Phone'];
       $_SESSION['Name'] = $Row['FName'] . ' ' . $Row['LName'] ;
       ?>
      
       <script> window.location.href="/CMMS/index.php";  </script>

     <?php }

  }else{
     header("Location: http://".$_SERVER['HTTP_HOST'] . "/CMMS/Account/login.php?Erorr=Password is incorrect ");  
      
      
  }

}

 ?>



<?php include('../Theme/Footer.php'); ?>
