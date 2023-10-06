<?php


session_start();

if(!isset($_SESSION['Status'])){

 $_SESSION['Status'] = 'False';   
}
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
  <?php

$path = array('','', '../','../../', '../../../');

$URI = $_SERVER['REQUEST_URI'];

$pathStyleOfPage = 0;

//echo  'URI : ' . $URI; 
    
for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}
    
//echo '<br />Path : '. $pathStyleOfPage;

include($path[$pathStyleOfPage-1].'Lib/functions.php');
  ?>
  <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/bootstrap.css " rel="stylesheet"/>
  <script src="<?php echo $path[$pathStyleOfPage-1]; ?>Style/js/bootstrap.js"></script>
  <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/main.css" rel="stylesheet"/>
  <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/Form.css" rel="stylesheet"/>
  <link href="<?php echo $path[$pathStyleOfPage-1]; ?>Style/css/top-bar.css" rel="stylesheet"/>


</head>
<body id="Body">
    
<nav class="top-bar">   
<div class="left-bar">
 <ul>
     <li <?php echo Logout($_SESSION['Status']); ?>>
      <p>
        <i class="glyphicon glyphicon-user"></i>
      <?php
          if($_SESSION['ID']){
          echo " Welcome  ". Get_User_By_Id($_SESSION['ID'])[0][1]." ".Get_User_By_Id($_SESSION['ID'])[0][2]; } ?>
      </p>
    </li>
    <li>
      <p>
        <i class="glyphicon glyphicon-phone"></i>
      <?php //echo Get_Contact_Number_By_ID(2)[0][1] . " : ". Get_Contact_Number_By_ID(2)[0][2];
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
<li id="Seller" <?php  echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-euro"></i>
    
    <?php 
    
    if(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])){ ?>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>/EXMS/Dashboard/Seller/?ID=<?php echo $_SESSION['ID']; ?>">Seller
    </a>
    <?php }else{ ?>
    <a href="<?php echo $path[$pathStyleOfPage-1]; ?>/EXMS/?Name=Seller">Get Seller
    </a>
    <?php } ?>
</li>
    
 <?php
    
    if($_SESSION['ID']){
    
    if(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])){ ?>   
          <li id="Orders">

<i class="glyphicon glyphicon-bell"></i>
<a href="<?php  echo $path[$pathStyleOfPage-1]; ?>/EXMS/?Name=Orders"> 
    <?php echo Get_Exchange_Items_Order_Notification_By_Id(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][0])[0][0]; ?>
    </a>
</li>
<?php }else{ ?>
       <li id="Cart">
<i class="glyphicon glyphicon-shopping-cart"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>/EXMS/?Name=Cart"> 
    <?php echo Get_Exchange_Items_Cart_Notification_By_Id($_SESSION['ID'])[0][0]; ?>
    </a>
</li> 
    <?php }}?>
<li id="Dashborad" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-dashboard"></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>/EXMS/Dashboard/">Dashboard </a>
</li>


<li id="Logout" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-out" ></i>
<a href="<?php echo $path[$pathStyleOfPage-1]; ?>Lib/Account/destroy_session.php">Logout </a>
</li>


    

</ul>
</div>
</nav>
    
  <header class="Header">
      <div class="Contact">
      <ul>
    <?php // for($i=0; $i<count(Get_Contact_Number_All()); $i++){ ?>
<!--          Get Email - company number- Address-->
          <li></li>
          <?php // } ?>
          </ul>
      
      </div>
       
    <div class="title">
<img src="<?php echo $path[$pathStyleOfPage-1]; ?>img/logo.png" />
      <h1><?php  //echo Get_Site_Title(); ?></h1>
    </div>
      
     
       </header>
   <div class="clearfix"></div>                                      
    <div class="menus">                       
<?php include($path[$pathStyleOfPage-1].'Theme/Menu.php'); ?>
      
 </div> 

