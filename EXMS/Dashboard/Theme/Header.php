<?php

session_start();

?>

<!DOCTYPE HTML>
<HTML>
  <head>
    <?php
  $path = array('','', '../', '../../', '../../../');

  $URI =  $_SERVER['REQUEST_URI'];

  $pathStyleOfPage =0;

  for($i =0; $i<strlen($URI); $i++){
    if($URI[$i] === '/'){
      $pathStyleOfPage++;
    }
  }
  include($path[$pathStyleOfPage-1] . 'Lib/functions.php');

    ?>
      <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/bootstrap.css " rel="stylesheet"/>
  <script src="<?php echo $path[$pathStyleOfPage-1]; ?>Style/js/bootstrap.js"></script>
    <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Styles/css/main.css" rel="stylesheet" />
     <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/top-bar.css" rel="stylesheet"/>
      
  </head>
  <body class="row">
          
<nav class="top-bar">
<div class="left-bar">
 <ul>
     <li <?php echo Logout($_SESSION['Status']); ?>>
      <p>
        <i class="glyphicon glyphicon-user"></i>
      <?php
      echo " Welcome  ". Get_User_By_Id($_SESSION['ID'])[0][1]." ".Get_User_By_Id($_SESSION['ID'])[0][2];
       ?>


      </p>
    </li>
    <li>
      <p>
        <i class="glyphicon glyphicon-phone"></i>
      <?php 
      //echo Get_Contact_Number_By_ID(2)[0][1] . " : ". Get_Contact_Number_By_ID(2)[0][2];
       ?>


      </p>
    </li>
  </ul>
</div>
<div class="right-bar">
 
<ul>
<li id="Signup" <?php echo Login($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-pencil"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>Account/sign_up.php">Sign Up </a>
</li>
    
<li id="Login" <?php echo Login($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-in"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>Account/login.php">Login </a>
</li>
    
    
 <?php
    
    if(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])){ ?>   
          <li id="Orders">

<i class="glyphicon glyphicon-bell"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>?Name=Orders"> 
    <?php echo Get_Exchange_Items_Order_Notification_By_Id(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][0])[0][0]; ?>
    </a>
</li>
<?php }else{ ?>
       <li id="Cart">
<i class="glyphicon glyphicon-shopping-cart"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>?Name=Cart"> 
    <?php echo Get_Exchange_Items_Cart_Notification_By_Id($_SESSION['ID'])[0][0]; ?>
    </a>
</li> 
    <?php } ?>
    
<li id="Dashborad" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-dashboard"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>">Site Home </a>
</li>


<li id="Logout" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-out" ></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>Lib/Account/destroy_session.php">Logout </a>
</li>


    

</ul>
</div>
</nav>


<header class=" col-lg-12 col-md-12 Header">
  <div class="title">
    <p><?php //echo Get_Site_Title(); ?></p>

  </div>
</header>


<?php include("Navbar.php"); ?>


<div class="col-lg-7 col-md-7 Body">
