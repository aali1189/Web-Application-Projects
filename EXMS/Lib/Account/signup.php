<?php




$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Phone = $_POST['Phone'];
$Password = $_POST['Password'];


if($_POST['FirstName']){
    
include('../DBC.php');
include('../functions.php');

$Result = mysqli_query($con, "insert into users (first_name, last_name, email, phone, Password) values ('$FirstName', '$LastName', '$Email', '$Phone', '$Password')");

if($Result === true){?>

<script> window.location.href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/EXMS/Account/login.php";  </script>

   

 <?php } } ?>
