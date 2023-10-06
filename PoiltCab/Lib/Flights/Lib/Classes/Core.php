<?php


  
 
class CoreAPI {
    

   public $URL = "https://test.api.amadeus.com";
   public $Version = "v2";
   public $Methods = array("/shopping/flight-offers?","/shopping/flight-offers/pricing?","/shopping/flight-destinations?", "/shopping/flight-dates?","/shopping/availability/flight-availabilities?","/shopping/flight-offers/upselling?","/shopping/seatmaps?");

    
    function URL(){ 
        return $URL;
    }
    
    function Version(){
        return $Version;
    }
    
    function Methods(){
        return $Methods;
    }
    
    function AuthorizationToken(){
        return $AuthorizationToken;
    }
    
}
    
class Flight {
    
     //$URL = "http://localhost/PoiltCab";
     
    //Flight Offer Search GET
    function FOS($Arr){
        
     $Var = new CoreAPI();        
     $url = $Var->URL. "/" . $Var->Version . $Var->Methods[0]. $Arr; 
     $curl = curl_init($url);
     curl_setopt($curl, CURLOPT_URL, $url);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

     $headers = array(
        "Accept: application/json",
        "Authorization: "."Bearer ". json_decode(file_get_contents("http://localhost/PoiltCab/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
                     );
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
    //for debug only!
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    $resp = curl_exec($curl);
    
    curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
    
    //Flight Offer Price POST
    function FOP($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[1]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }

    //Flight Inspiration Search
    function FIS($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[2]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
    
    //Flight Cheapest Date Search
    function FCDS($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[3]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
    
    //Flight Availibilites Search
    function FAS($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[4]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
    
    //Branded Fares Upsell
    function BFU($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[5]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
    
    //Seatmap Display
    function SMD($Arr){
        
$Var = new CoreAPI();        
$url = $Var->URL. "/" . $Var->Version . $Var->Methods[6]. $Arr; 
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "Accept: application/json",
   "Authorization: "."Bearer ". json_decode(file_get_contents($URL."/Lib/Flights/Lib/Classes/output.json"),true)['access_token']
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
    
curl_close($curl);
  
        
    return json_decode($resp);
        
        
    }
       
    }
    


?>