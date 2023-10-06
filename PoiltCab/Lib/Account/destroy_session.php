<?php

session_start();

include('../functions.php');

//session_unset();
$_SESSION['Status'] = 'False';
//session_destroy();

header("Location: http://".$_SERVER['HTTP_HOST'] . "/" . $Project_Path);


?>
