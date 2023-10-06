<?php

//echo 'Function is up';
$Project_Path = "EXMS";


include('Classes/Content.php');
include('Classes/Exchange.php');
include('Classes/Currency.php');
include('Classes/Order.php');   
include('Classes/Budget.php');   
include('Classes/User.php'); 
include('Classes/System.php'); 
    

function Refresh(){
    
 
}

function Session(){
  
if($_SESSION['ID']){


}else{
    
header("Location: http://" . $_SERVER['HTTP_HOST'] . "/Account/login.php");

}

}

function convert($amount, $rate){
    
    return ($amount * $rate);
   
}

function content($content){
    $Contents = new Content();
     
   switch($content){
           
       case "Exchange":
           $Contents->Exchange();
            break;
           
       case "Currency": 
           $Contents->Currency();
            break; 
           
       case "Contact": 
           $Contents->Contact();
           break;
           
       case "Blackmarket":
           $Contents->Blackmarket();
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
             header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Orders");   
           }
           $Contents->Seller();
           break;
           
       default:
          header("Location: http://".$_SERVER['HTTP_HOST'] . "/EXMS/?Name=Currency&Amount=1000");  
           break;
           
   }
    
}

function Get_Exchange_Buyer_All(){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Buyer_All();
}

function Get_Exchange_Buyer_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Buyer_By_Id($id);
   
}

function Get_Exchange_Seller_All(){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Seller_All(); 
}

function Get_Exchange_Seller_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Seller_By_Id($id); 
}

function Get_Exchange_Seller_By_Id_menu($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Seller_By_Id_menu($id); 
}

function Get_Exchange_Items_Cart_All(){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Items_Cart_All(); 
}

function Get_Exchange_Items_Cart_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Items_Cart_By_Id($id); 
}

function Get_Exchange_Items_Order_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Items_Order_By_Id($id);   
}

function Get_Exchange_Items_Cart_Notification_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Items_Cart_Notification_By_Id($id);         
}

function Get_Exchange_Items_Order_Notification_By_Id($id){
    $Exchanges = new Exchange();
    return $Exchanges->Get_Exchange_Items_Order_Notification_By_Id($id);       
}

function Get_Currency_All(){
    $Currencies = new Currency();
    
    return $Currencies->Get_Currency_All();
}

function Get_Currency_By_Id($Id){
 $Currencies = new Currency();
    
    return $Currencies->Get_Currency_By_Id($Id);
   
}

function Get_Currency_By_Id_Code($Id_code){
  $Currencies = new Currency();
    
    return $Currencies->Get_Currency_By_Id_Code($Id_code);   
}

function Get_Currency_order_by_name($name){
  
    $Currencies = new Currency();
    
    return $Currencies->Get_Currency_order_by_name($name);    
}

function Get_Currency_Alias_All(){
    $Currency_Alias = new Currency();
    
    return $Currency_Alias->Get_Currency_Alias_All();
}

function Get_Currency_Alias_By_Id($Id){
    $Currency_Alias = new Currency();
    
    return $Currency_Alias->Get_Currency_Alias_By_Id($Id);
}

function Get_Orders_All(){
 $Orders = new Order();
    
    return $Orders->Get_Orders_All();
   
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

function profile($id){
include('DBC.php');
$Result = mysqli_query($con, "select * from Exchange_Seller where Id=$id");
    
if(mysqli_num_rows($Result)>0){

$Arr = Array();
$Row = 0;
while($Rows = mysqli_fetch_array($Result)){
$Arr[$Row][0] = $Rows['User_Id'];
$Arr[$Row][1] = $Rows['Id'];
$Arr[$Row][2] = $Rows['name'];
$Arr[$Row][3] = $Rows['address'];
$Arr[$Row][4] = $Rows['currency_Id'];
$Arr[$Row][5] = $Rows['Percentage'];
$Row++;
}

  return $Arr;
}else {

  return false;
} 
    ?>
    
   
<?php }

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

if($SESSION == 'True'){
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

function Logout($SESSION){
    
if($SESSION === 'True'){
return "style='display:block'";
}else{
return "style='display:none'";
}

}

?>
