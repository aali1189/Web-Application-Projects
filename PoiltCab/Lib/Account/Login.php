<?php

//echo 'Email : ' . $_POST['email'];
 $Email = $_POST['email'];
 $Password = $_POST['password'];
 $RememberMe  = $_POST['RememberMe'];




 if($Email){
   include('../DBC.php');

   $Result = mysqli_query($con, "select Id from users where email = '$Email'");


   if(mysqli_num_rows($Result)>0){

       header("Location: http://".$_SERVER['HTTP_HOST'] . "/webpage/Profile/index.php");
   }else {
     // code...
     header("Location: http://".$_SERVER['HTTP_HOST'] . "/webpage/Account/login.php?Erorr=This Email is not exist");

   }


 if($Email){
   include('../DBC.php');
   include('../functions.php');

   $ID = Get_ID($Email);


   $Result = mysqli_query($con, "select Password from pass where id = '$ID'");



   if(mysqli_num_rows($Result)>0){

      $Pass = mysqli_fetch_array($Result);

      if($Pass['Password'] == $Password){
       session_start();
       $_SESSION['Status'] = 'True';
       $_SESSION['ID'] = $ID;
       header("Location: https://".$_SERVER['HTTP_HOST'] . "/".$Project_Path);
      }else {
       header("Location: https://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."Account/login.php?Erorr=Password is incorrrect ");
      }

   }else {
     // code...
     header("Location: https://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."Account/login.php?Erorr=Password is incorrrect ");

   }

 }
 ?>
