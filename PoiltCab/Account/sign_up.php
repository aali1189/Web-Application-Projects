<?php include('../Theme/Header.php');
echo "Hello";
?>
<div class="Form">
<form id="SignUp" action="../Lib/Account/signup.php"  method="post" >
<label>First Name</label>
<input type="text" name="FirstName" id="FirstName" placeholder="Ex: Ali" />
<br />
<label>Last Name</label>
<input type="text" name="LastName" id="LastName" placeholder="Omer" />
<br />
<label>Email</label>
<input type="email" name="Email" id="Email" placeholder="example@example.com" />
<br />
<label>Phone</label>
<input type="number" name="Phone" id="Phone" placeholder="+000 0912345670" />
<br />
<label>Password</label>
<input type="password" name="Password" id="password" placeholder="********" />
<br />
<label>Confirm</label>
<input type="password" name="confirm" id="confirm" placeholder="********"  />
<br />
<input class="btn" type="submit" title="Sign Up" text="Sign Up" value="Sign Up" />






</form>

</div>



<?php include('../Theme/Footer.php')?>
