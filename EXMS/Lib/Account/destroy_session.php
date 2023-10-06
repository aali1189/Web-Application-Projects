<?php

session_start();


$_SESSION['Status'] = 'False';


session_destroy();


header("Location: http://".$_SERVER['HTTP_HOST']. "/EXMS/index.php?Name=Currency&Amount=1");


?>
