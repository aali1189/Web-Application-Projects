<?php
session_start();
if(isset($_SESSION['Status'])){
    echo "Status : True";
}else{
    echo "Status : Null";
    
}
//$_SESSION['Status'];
//print_r($_SESSION);

$path = array('','../', '../../', '../../../');

$URI =  $_SERVER['REQUEST_URI'];

$pathStyleOfPage =0;

for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}

include($path[$pathStyleOfPage-2] . 'Lib/functions.php');
?>
  
<!DOCTYPE html>
<html>
<head id="Head">
    <meta charset="utf-8" />
    
     <link href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/bootstrap.css " rel="stylesheet"/>
     <link href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/main.css" rel="stylesheet"/>
     <link href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/Form.css" rel="stylesheet"/>
     <link href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/top-bar.css" rel="stylesheet"/>
     <link href="<?php echo $path[$pathStyleOfPage-2]; ?>Style/css/All-FontAwesome.css" rel="stylesheet"/>
     <script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/All-FontAwesome.js"></script>
    

    


</head>
<body id="Body">
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
      echo Get_Contact_Number_By_ID(2)[0][1] . " : ". Get_Contact_Number_By_ID(2)[0][2];
       ?>


      </p>
    </li>
  </ul>
</div>
<div class="right-bar">
 
<ul>
<li id="Signup" <?php echo Login($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-pencil"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/sign_up.php">Sign Up </a>
</li>
    
<li id="Login" <?php echo Login($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-in"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/login.php">Login </a>
</li>
<li id="Seller" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-euro"></i>
    
    <?php //if(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][0]){ ?>
<a href="<?php echo $path[$pathStyleOfPage-2] . $Project_Path;?>/Dashborad/Seller/?ID=<?php echo $_SESSION['ID']; ?>">Seller
    </a>
    <?php //}else{ ?>
    <a href="<?php echo $path[$pathStyleOfPage-2]; ?>?Name=Seller">Get Seller
    </a>
    <?php //} ?>
</li>
    
 <?php
    
    //if(Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][0]){ ?>   
          <li id="Orders">

<i class="glyphicon glyphicon-bell"></i>

</li>
    
<li id="Dashborad" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-dashboard"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Dashboard/">Dashboard </a>
</li>


<li id="Logout" <?php echo Logout($_SESSION['Status']); ?>>
<i class="glyphicon glyphicon-log-out" ></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Lib/Account/destroy_session.php">Logout </a>
</li>


    

</ul>
</div>
</nav>
                                   


