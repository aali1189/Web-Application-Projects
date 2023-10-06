
<?php
include('../Theme/Header.php');

?>
<div class="Form login">
<?php
$Err = $_GET['Erorr'];
if($Err){

  echo '<label>'. $_GET['Erorr'] .'</label>';
}else{

}
?> 

<form method="post" action="../Lib/Account/Login.php">
<input type="email" name="email" id="email" placeholder="Example@example.com" />
<br />
<input type="password" name="password" id="passsword" placeholder="password" />
<br />
<input type="checkbox" name="RememberMe" id="RememberMe" />
<label>Remember Me</label>
<br />
<input class="btn" type="submit" value="Log in" />
<br />
<a class="Danger" target="_blank" href="PasswordReset.php">Password Reset ?</a>
</form>
</div>


<?php
include('../Theme/Footer.php');
?>
