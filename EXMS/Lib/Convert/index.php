


<?php 

$Amount = $_GET['Amount'];
$Name = $_GET['Name'];

echo $Amount;
if($Amount > 0 ){
    
header("Location: https://".$_SERVER['HTTP_HOST'] . "/?Name=$Name&Amount=$Amount");

    
}




?>

