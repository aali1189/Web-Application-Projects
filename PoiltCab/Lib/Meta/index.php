<?php 


class Meta {
    
    
  function setup(){
      
   include('../DBC.php');

   $Result = mysqli_query($con, "select * from meta");


   if(mysqli_num_rows($Result)>0){

     return true;
   }else{
       
header("Location: http://".$_SERVER['HTTP_HOST'] . "/Lazurd/Lib/Meta/Setup.php");
   }
      
      return false;
      
  } 
    
    
}


?>