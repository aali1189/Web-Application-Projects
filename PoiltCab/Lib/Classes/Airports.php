<?php


//echo 'Strlen : ' . strlen($_GET['airport']);
//echo 'Char : ' . $_GET['airport'][0];

if(!$_GET['airport']){
    
}else{
    
   //echo 'Airport : ' . $_GET['airport']  . '<br />'; 
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    $Airport = new Airports();
    
echo json_encode($Airport->Get_Airports_Details($_GET['airport']));
}



 class Airports {
     
     
  
//        "iata": "UTK",
//        "lon": "169.86667",
//        "iso": "MH",
//        "status": 1,
//        "name": "Utirik Airport",
//        "continent": "OC",
//        "type": "airport",
//        "lat": "11.233333",
//        "size": "small"



function Get_Airports_Details($code){
    $Data = json_decode(file_get_contents("https://flights.lazurd-agn.com/Lib/Classes/Airports.json"),true);


    $Airport;
    $count =0;
  for($i=0;$i<count($Data); $i++){
            
        if($Data[$i]['iata'] == $code){
    
            
        $Airport['id'] = $i;
        $Airport['iata'] = $Data[$i]['iata'];
        $Airport['lon'] = $Data[$i]['lon'];
        $Airport['lat'] = $Data[$i]['lat'];
        $Airport['iso'] = $Data[$i]['iso'];
        $Airport['status'] = $Data[$i]['status'];
        $Airport['name'] = $Data[$i]['name'];
        $Airport['continent'] = $Data[$i]['continent'];
        $Airport['type'] = $Data[$i]['type'];
        $Airport['size'] = $Data[$i]['size'];
        //$count++;
      //break;
    }   
       
      
          
      }

   
    
   return $Airport;
}

}
     



?>