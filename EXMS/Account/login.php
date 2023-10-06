<?php include('../Theme/Header.php'); ?>

<div class="Form login">
<?php

if(isset($_GET['Erorr'])){

  echo '<label style="color:red">'. $_GET['Erorr'] .'</label>';
}
?>
    
<h3> Sign in</h3>

<form class="form-horizontal" action="../Lib/Account/Login.php" method="post">
<input class="form-control" type="email" name="email" id="email" placeholder="Example@example.com" />
<br />
<input class="form-control" type="password" name="password" id="passsword" placeholder="password" />
<br />
<input type="checkbox" name="RememberMe" id="RememberMe" />
<label>Remember Me</label>
<br />
<input class="btn" type="submit" value="Sign In" />
<br />
<a class="Danger" target="_blank" href="PasswordReset.php">Password Reset ?</a>
  <br /> 
  <br />
 <a class="primary" target="_blank" href="sign_up.php">Sign Up</a>   
</form>
    
    
</div>



<?php include('../Theme/Footer.php'); ?>
