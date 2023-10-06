<?php include('../Theme/Header.php');?>
<div class="Form">
    <h3> Sign Up </h3>
<form id="SignUp" action="../Lib/Account/signup.php"  method="post" >

<input class="form-control" type="text" name="FirstName" id="FirstName" placeholder="First Name" />
<br />
<input class="form-control" type="text" name="LastName" id="LastName" placeholder="Last Name" />
<br />
<input class="form-control" type="email" name="Email" id="Email" placeholder="example@example.com" />
<br />
<input class="form-control" type="number" name="Phone" id="Phone" placeholder="+249 0912345670" />
<br />
<input class="form-control" type="password" name="Password" id="password" placeholder="********" />
<br />
<input class="form-control" type="password" name="confirm" id="confirm" placeholder="********"  />
<br />
<input class="btn" type="submit" title="Sign Up" text="Sign Up" value="Sign Up" />






</form>

</div>



<?php include('../Theme/Footer.php')?>
