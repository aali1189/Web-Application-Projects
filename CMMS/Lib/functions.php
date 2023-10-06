<?php
//echo "Functions Up";

function path(){
    
$path = array('', '../','../../', '../../../');

$URI = $_SERVER['REQUEST_URI'];

$pathStyleOfPage = 0;
    
for($i =0; $i<strlen($URI); $i++){
  if($URI[$i] === '/'){
    $pathStyleOfPage++;
  }
}
    return $path[$pathStyleOfPage-1];
}

function session($ID){
    
    if(isset($_SESSION[$ID])){
        return true;
        
    }
    return false;
}

function Get_Users_All(){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from users");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['FName'];
          $Arr[$Row][2] = $Rows['LName'];
          $Arr[$Row][3] = $Rows['Email'];
          $Arr[$Row][4] = $Rows['Phone'];
          $Arr[$Row][5] = $Rows['Address'];
          $Arr[$Row][6] = $Rows['Password'];
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
    
    
    
}

function Get_Users_By_ID($ID){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Users where ID = $ID");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['FName'];
          $Arr[$Row][2] = $Rows['LName'];
          $Arr[$Row][3] = $Rows['Email'];
          $Arr[$Row][4] = $Rows['Phone'];
          $Arr[$Row][5] = $Rows['Address'];
          $Arr[$Row][6] = $Rows['Password'];
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
    
    
    
}

function Get_Tickets_All(){
   
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Tickets");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Category_ID'];
          $Arr[$Row][2] = $Rows['Issue_ID'];
          $Arr[$Row][3] = $Rows['User_ID'];
          $Arr[$Row][4] = $Rows['Dept_ID'];
          $Arr[$Row][5] = $Rows['Status'];
          $Arr[$Row][6] = $Rows['Details'];
          $Arr[$Row][7] = $Rows['Date'];
          $Arr[$Row][8] = $Rows['Close'];
          $Arr[$Row][9] = $Rows['Date_close'];
          $Arr[$Row][10] = $Rows['Building'];
          $Arr[$Row][11] = $Rows['Floor'];
          $Arr[$Row][12] = $Rows['Room'];
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }   
}

function Get_Tickets_Open_All(){
   
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Tickets where Close = 'false'");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Category_ID'];
          $Arr[$Row][2] = $Rows['Issue_ID'];
          $Arr[$Row][3] = $Rows['User_ID'];
          $Arr[$Row][4] = $Rows['Dept_ID'];
          $Arr[$Row][5] = $Rows['Status'];
          $Arr[$Row][6] = $Rows['Details'];
          $Arr[$Row][7] = $Rows['Date'];
          $Arr[$Row][8] = $Rows['Close'];
          $Arr[$Row][9] = $Rows['Date_close'];
          $Arr[$Row][10] = $Rows['Building'];
          $Arr[$Row][11] = $Rows['Floor'];
          $Arr[$Row][12] = $Rows['Room'];
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }   
}

function Get_Tickets_By_User_ID($ID){
   
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Tickets where User_ID = $ID");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Category_ID'];
          $Arr[$Row][2] = $Rows['Issue_ID'];
          $Arr[$Row][3] = $Rows['User_ID'];
          $Arr[$Row][4] = $Rows['Dept_ID'];
          $Arr[$Row][5] = $Rows['Status'];
          $Arr[$Row][6] = $Rows['Details'];
          $Arr[$Row][7] = $Rows['Date'];
          $Arr[$Row][8] = $Rows['Close'];
          $Arr[$Row][9] = $Rows['Date_close'];
          $Arr[$Row][10] = $Rows['Building'];
          $Arr[$Row][11] = $Rows['Floor'];
          $Arr[$Row][12] = $Rows['Room'];
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }   
}


function Get_Department_All(){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Department");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Name'];
          $Arr[$Row][2] = $Rows['Section'];
          $Arr[$Row][3] = $Rows['Details'];
          
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
    
    
    
}

function Get_Category_All(){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Category");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Name'];
          $Arr[$Row][2] = $Rows['Des'];
          
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
       
}

function Get_Issues_All(){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Issues");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['CategoryID'];
          $Arr[$Row][2] = $Rows['Name'];
          $Arr[$Row][3] = $Rows['Des'];
          
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
       
}

function Get_Issues_By_ID($ID){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Issues where CategoryID = $ID");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['CategoryID'];
          $Arr[$Row][2] = $Rows['Name'];
          $Arr[$Row][3] = $Rows['Des'];
          
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
       
}

function Get_Category_By_ID($ID){
   include('DBC.php'); 
    
    $Query = mysqli_query($con, "select * from Category where ID = $ID");
    
    
    if(mysqli_num_rows($Query)>0){
        
        $Arr = Array();
        $Row = 0;
      while($Rows = mysqli_fetch_array($Query)){
       
          $Arr[$Row][0] = $Rows['ID'];
          $Arr[$Row][1] = $Rows['Name'];
          $Arr[$Row][2] = $Rows['Des'];
          
          
        $Row++;
    }
        
        return $Arr;
    }else{
        
        return false;
    }
       
}

function Allow_User(){
    if(!isset($_SESSION['UserID'])){
     header("Location:Account/login.php");
     //echo " ID : " . $_SESSION['ID'];
    }else{
        
        
    }
    
}



function Logout($SESSION){
    
if($SESSION === 'True'){
return "style='display:block'";
}else{
return "style='display:none'";
}

}

function Logged($SESSION){
    
if($SESSION === 'True'){
return "style='display:none'";
}else{
return "style='display:block'";
}

}


?>