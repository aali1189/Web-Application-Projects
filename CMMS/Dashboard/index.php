<?php 

session_start();



$path = array('', '../','../../', '../../../');

$URI = $_SERVER['REQUEST_URI'];

$pathStyleOfPage = 0;
    
for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}
 include($path[$pathStyleOfPage-2]."Lib/functions.php");



if($_SESSION['Status'] === 'True'){
    
}else{
   header("Location:../Account/login.php"); 
} 


?>


<!DOCTYPE html>
<html dir="rtl">
<head lang="ar">
    
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
    


    
 


    

<li id="Dashborad">
<i class="glyphicon glyphicon-dashboard"></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>">الصفحة الرئيسية </a>
</li>


<li id="Logout">
<i class="glyphicon glyphicon-log-out" ></i>
<a href="<?php echo $path[$pathStyleOfPage-2]; ?>Account/destroy_session.php">الخروج </a>
</li>


    

</ul>
</div>
</nav>
    
</header>
     
     
<div class="row">
   
     
    <section class="col-lg-10 col-md-10 Dashborad-body">
    
      <div class="Content">
     
         <?php 
          
          
         $Page = $_GET['page'];
          
         if($Page === 'Dashboard'){?>
              <div class="title"><p>Dashboard</p></div>
              <div class="row">

              <div class="col-lg-3 col-md-3 text-center">

              <h2>
  
   <?php if(Get_Users_All()>1){
    echo count(Get_Users_All());
}else{
    
 echo "0";   
}?>
</h2>
 <h4>Users</h4>
</div>
    
<div class="col-lg-3 col-md-3 text-center">

      <h2>
    
      <?php if(Get_Tickets_All()>1){
    echo count(Get_Tickets_All());
}else{
    
 echo "0";   
}?>
    </h2>
    
 <h4>Ticketing</h4>
</div>
    
</div>


           
        <?php }else{
             include($Page."/index.php");
         }
         
         
         ?>
     
     </div>
    </section> 
    
     <section class="col-lg-2 col-md-2 Navbar">
    
    <ul>
         
         <li>
             <a href="?page=Dashboard">لوحة التحكم</a>
        </li>
        
        <li>
    <a href="?page=Ticketing">  البلاغات <?php if(count(Get_Tickets_Open_All())>0){ 
    echo '( '. count(Get_Tickets_Open_All()) .' )'; } ?> </a>
        </li>
        <li>
             <a href="?page=Department">الصيانة</a>
        </li>
        <li>
             <a href="?page=Issues">الاعطال</a>
        </li>
        <li>
             <a href="?page=Users">المستخدمين</a>
        </li>
        <li>
             <a href="?page=Report">التقارير</a>
        </li>
         </ul>
    </section> 
</div>
   
     
     
     
   
     
     
    <script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/jquery.js"></script>
    <script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/bootstrap.js"></script>



</body>
    
    
<footer>


</footer>

</html>