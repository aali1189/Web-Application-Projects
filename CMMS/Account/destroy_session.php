<?php

session_start();

session_destroy();
session_start();
$_SESSION['Status'] = "False";

header("Location:http://".$_SERVER['HTTP_HOST']."/CMMS/");

?>