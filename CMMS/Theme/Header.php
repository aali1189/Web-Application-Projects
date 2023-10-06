<?php 



session_start();

if(!isset($_SESSION['Status'])){
    $_SESSION['Status'] = "False";
}
$path = array('', '../','../../', '../../../');

$URI = $_SERVER['REQUEST_URI'];

$pathStyleOfPage = 0;
    
for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}
include($path[$pathStyleOfPage-2].'Lib/functions.php');
?>


<!DOCTYPE html>
<html dir="rtl">
<head lang="ar">
<meta charset="utf-8" />
    
<link rel="stylesheet" href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/main.css" />
    <link rel="stylesheet" href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/Form.css" />
    <link rel="stylesheet" href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/top-bar.css" />
    <script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/main.js"></script>
    
   
</head>
 <body class="container">
     
<header>
    
<nav class="top-bar">   
<div class="left-bar">
 <ul>
     <?php  if(isset($_SESSION['UserID'])){ ?>
     <li>
     
        
      <?php
          if(isset($_SESSION['UserID'])){
          echo "<span> Welcome  " . $_SESSION['Name'] . "</span>"; }?>
        <i class="glyphicon glyphicon-user"></i>
    </li>
    <?php } ?>
    
  </ul>
</div>
<div class="right-bar">
 
<ul>
    

  
<li id="Signup" <?php echo Logged($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-pencil"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/Signup.php">التسجيل </a>
</li>
 
    
 
<li id="Login" <?php echo Logged($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-in"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/login.php">دخول </a>
</li>
 

<li id="Orders" <?php echo Logout($_SESSION['Status']); ?>>
    <?php if(Get_Tickets_By_User_ID($_SESSION['UserID'])>0){ ?>
 <i class="glyphicon glyphicon-bell"></i>   
<span>(<?php echo count(Get_Tickets_By_User_ID($_SESSION['UserID']));?>)</span>

    <?php }else{  ?>
    
    <?php } ?>
<a href="<?php  echo $path[$pathStyleOfPage-2]; ?>"> 
    
    </a>
</li>
    

<li id="Dashborad" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-dashboard"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>/CMMS/Dashboard/">لوحة التحكم </a>
</li>


<li id="Logout" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-out" ></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/destroy_session.php">خروج </a>
</li>


    

</ul>
</div>
</nav>
    
</header>