<?php

include('../../Theme/Header.php');



$con = mysqli_connect("localhost","root", "rootroot", "Lazurd");

?>

<div class="Form">
<form action="" method="post" >

<input class="form-control" type="text" name="DatabaseUrl" placeholder="Database Url"  />
    
<input class="form-control" type="text" name="DatabaseName" placeholder="Database Name"  />

<input class="form-control" type="text" name="DatabasePassword" placeholder="Database Password"  />
    

    
    
</form>




</div>


 

<?php include('../../Theme/Footer.php');

?>