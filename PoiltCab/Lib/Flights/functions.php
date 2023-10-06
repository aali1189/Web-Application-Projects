<?php


$Project_Path = "PoiltCab";


include('Classes/Content.php');
include('Classes/Currency.php');
include('Classes/Order.php');   
include('Classes/Budget.php');   
include('Classes/User.php'); 
include('Classes/System.php');
//include('Classes/Airports.php');
include('Flights/Lib/Classes/Flight_Offer_Search.php');

function FOS($Para){
    
     $Request_Flight = new Flight();
      return json_encode($Request_Flight->FOS($Para));
}


function Session(){
    
    
  
if($_SESSION['Status'] === 'True'){


}else{

  header("Location: http://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."/Account/login.php");

}
}

function convert($amount, $rate){
    
    return ($amount * $rate);
   
}

function ConvertTime($Str){
    
    $Time = strtotime($Str);
    
    return date('H:i', $Time);
}

function ConvertAMPM($Str){
    
   $Time = strtotime($Str);
    
    return date('a', $Time); 
    
}

function ConvertDate($Str){
    $Date = strtotime($Str);
    
    return date('Y-M-d', $Date);
}

function ConvertDateStr($Str){
    $Date = strtotime($Str);
    
    return date('D, M d', $Date);
}

function CalculateHours($x, $y){
    echo $x . '<br />';
    echo $y . '<br />';
    $from = new DateTime($x);
    $to = new DateTime($y);

return $from->diff($to)->format('%h.%i');
    
}

function Airports_Details($code){
    
    
    
    
}

function content($content){
    $Contents = new Content();
     
   switch($content){
           
       case "Flights":
           $Contents->Flights();
            break;
           
       case "Cart": 
           Session();
           $Contents->Cart();
           break;
           
       case "Orders":       
           Session(); 
           $Contents->Orders();
           break;
           
       case "Seller": 
           Session();
//Check if the seller has been logged...
           if(Get_Exchange_Seller_By_Id($_SESSION['ID'])>0){
             header("Location: http://".$_SERVER['HTTP_HOST'] . "/".$Project_Path."EXMS/?Name=Orders");   
           }
           $Contents->Seller();
           break;
           
       default:
          $Contents->PageNotFound();
           break;
           
   }
    
}

function Get_Budget_All(){
    $Budgets = new Budget();
    
    return $Budgets->Get_Budget_All();
     
}

function Get_Budget_By_Id($id){
    $Budgets = new Budget();
    
    return $Budgets->Get_Budget_By_Id($id);        
}

function Get_Available_Budget_By_Id($id, $id_cu){
    $Budgets = new Budget();
    
    return $Budgets->Get_Available_Budget_By_Id($id, $id_cu);
}

function Get_User_By_Id($id){
    
    $Users = new User();
    
    return $Users->Get_User_By_Id($id);
    
}

function Get_Users_All(){
   $Users = new User();
    
    return $Users->Get_Users_All();
    
}

function path_dir(){
   
    $Path_Dir = new System();
    return $Path_Dir->path_dir();
}

function Get_Site_Title(){
    
    $Site_Title = new System();
    return $Site_Title->Get_Site_Title();
}

function Get_ID($Email){

    $Users = new User();
    
    return $Users->Get_ID($Email);

}

function Insert_Pass($ID, $Pass){

    $Users = new User();
    
    return $Users->Insert_Pass($ID, $Pass);

}

function Get_Social_Media_All(){

    $Social_Media = new System();
    
    return $Social_Media->Get_Social_Media_All();
}

function Get_Contact_Number_All(){

   $Contact_Number = new System();
    
    return $Contact_Number->Get_Contact_Number_All();
    
}

function Get_Contact_Number_By_ID($ID){
     
    $Contact_Number = new System();
    
    return $Contact_Number->Get_Contact_Number_By_ID($ID);

}

function Get_Menus_All($Title){

    $Menus = new System();
    
    return $Menus->Get_Menus_All();
    
}

function Get_Profile_All(){

 $Profile = new System();
    
    return $Profile->Get_Profile_All();
    
}

function Delete_Menu($ID){

    $Menus = new System();
    
    return $Menus->Delete_Menu($ID);
}

function login($SESSION){

if($SESSION === 'True'){
return "style='display:none'";
}else{
return "style='display:block'";
}

}

function Seller($SESSION){

if($SESSION === 'True'){
return "style='display:none'";
}else{
return "style='display:block'";
}

}

//Convert for Addresses
function Convert_Format($Currency_Id){
    
$Currencies = Array();

for($i=0;$i<=strlen($Currency_Id); $i++){
    
     if($Currency_Id[$i] === " "){
       
     }else{
         if($i<strlen($Currency_Id)-1){
              $Currencies[$i] = $Currency_Id[$i] . ',';  
         }else{
          $Currencies[$i] = $Currency_Id[$i];   
         }
       
     }
}

return $Currencies;
}

function Convert_Rate_Percentage($cur, $per){
//    Get currency value 
    
$fur = $cur/100;

return $cur+($fur*$per);
    
}

function logout($SESSION){

if($SESSION === 'True'){
return "style='display:block'";
}else{
return "style='display:none'";
}

}

?>
