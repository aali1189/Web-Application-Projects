
<?php

include('../Lib/Classes/Flight_Offer_Search.php');

//include('../Classes/Flight_Offer_Search.php')

//header("Content-Type:application/json");

   $Origin = $_POST['originLocationCode'];
   $Destination = $_POST['destinationLocationCode'];
   $DepartureDate = $_POST['departureDate'];
   $Adults = $_POST['adults'];
   $TravelClass = $_POST['travelClass'];
   $CurrencyCode = "USD";
   $MaxPrice = 500;
   $MaxOfResul = 10;
    
    
    ?>
    
<?php

//    $response['originLocationCode'] = $Origin;
//    $response['destinationLocationCode'] = $Destination;
//    $response['departureDate'] = $DepartureDate;
//    $response['adults'] = $Adults;
//    $response['travelClass'] = $TravelClass;
//    
//$json_response = json_encode($response);
//    echo $json_response ;

   //echo  "Origin Location : " . json_encode($Origin);

    
    
$Request = new Flights();

//         $Origin, $Destination, $Departure, $Adults, $Children, $Infants, $TravelClass,    $IncludedAirlineCodes, $NonStop, $CurrencyCode, $MaxPrice, $MaxOfResult

$Obj = $Request->FOS("originLocationCode=KRT".$Origin."&destinationLocationCode=CAI".$Destination.  "&departureDate=2022-12-20".$DepartureDate."&adults=1".$Adults."&travelClass=ECONOMY".$TravelClass."&maxPrice=".$MaxPrice."&max=".$MaxOfResul);

//echo $Obj;


//
//echo json_encode($Obj);
    
//$url = "https://test.api.amadeus.com/v2/shopping/flight-offers?currencyCode=USD&originLocationCode=".$Origin."&destinationLocationCode=".$Destination."&departureDate=".$DepartureDate."&travelClass=".$TravelClass."&adults=".$Adults;
//
//$curl = curl_init($url);
//curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//
//$headers = array(
//   "Accept: application/json",
//   "Authorization: Bearer WywdefWjjxG67tkT2bRyDJLict6Z",
//);
//curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
////for debug only!
//curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//
//$resp = curl_exec($curl);
////json_decode($resp);
//    
////$Obj = json_decode($resp);
//    
//curl_close($curl);
//  
//    
//$Obj = json_decode($resp);
//echo '$resp : ' . $resp;
//echo '<br />';
//    

//echo 'Code : ' . $Obj->errors[0]->code . '<br />';
//echo 'count : ' . $Obj->meta->count . '<br />';
//echo 'links : ' . $Obj->meta->links->self . '<br />';
//    
for($i=0; $i<$Obj->meta->count; $i++){
  echo 'Id : ' . $Obj->data[$i]->id . '<br />';

  echo 'Last Ticketing Date : ' . $Obj->data[$i]->lastTicketingDate . '<br />';

  echo 'Number Of Bookable Seats : ' . $Obj->data[$i]->numberOfBookableSeats . '<br />'; 
  echo 'Duration : ' . $Obj->data[$i]->itineraries[0]->duration . '<br />';
    
    
    if(count($Obj->data[$i]->itineraries[0]->segments)>1){
      for($j=0;$j<count($Obj->data[$i]->itineraries[0]->segments);$j++){
   echo '===============================================================<br />';       
  echo 'Departure : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->departure->iataCode . '<br />';
  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->departure->at . '<br />'; 
  echo 'Arrival : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->iataCode . '<br />'; 
//  echo 'Terminal : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->terminal . '<br />'; 
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->at . '<br />';
//  echo 'Carrier Code : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->carrierCode . '<br />';
//  echo 'Number : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->number . '<br />';
//  echo 'Aircraft Code : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->aircraft->code . '<br />';
//  echo 'Operating : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->operating->carrierCode . '<br />';
//  echo 'Duration : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->duration . '<br />';
//  echo 'ID : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->id . '<br />';
  echo 'Number Of Stops : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->numberOfStops . '<br />';
  echo 'Blacklisted In EU : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->blacklistedInEU . '<br />';
  echo '===============================================================<br />';
      }  
    }else{
        
  echo '===============================================================<br />';
  echo 'Departure : ' . $Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode . '<br />';
  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[0]->departure->at . '<br />'; 
  echo 'Arrival : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode . '<br />'; 
//  echo 'Terminal : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->terminal . '<br />'; 
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->at . '<br />'; 
//  echo 'Carrier Code : ' . $Obj->data[$i]->itineraries[0]->segments[0]->carrierCode . '<br />';
//  echo 'Number : ' . $Obj->data[$i]->itineraries[0]->segments[0]->number . '<br />';
//  echo 'Aircraft Code : ' . $Obj->data[$i]->itineraries[0]->segments[0]->aircraft->code . '<br />';
//  echo 'Operating : ' . $Obj->data[$i]->itineraries[0]->segments[0]->operating->carrierCode . '<br />';
//  echo 'Duration : ' . $Obj->data[$i]->itineraries[0]->segments[0]->duration . '<br />';
//  echo 'ID : ' . $Obj->data[$i]->itineraries[0]->segments[0]->id . '<br />';
  echo 'Number Of Stops : ' . $Obj->data[$i]->itineraries[0]->segments[0]->numberOfStops . '<br />';
  echo 'Blacklisted In EU : ' . $Obj->data[$i]->itineraries[0]->segments[0]->blacklistedInEU . '<br />'; 
  echo '===============================================================<br />';
    }
    
//  echo 'Currency : ' . $Obj->data[$i]->price->currency . '<br />';
//  echo 'Total : ' . $Obj->data[$i]->price->total . '<br />';
//  echo 'Base : ' . $Obj->data[$i]->price->base . '<br />';
//  echo 'Fees Supplier : ' . $Obj->data[$i]->price->fees[0]->amount . '<br />';
//  echo 'Fees Ticketing : ' . $Obj->data[$i]->price->fees[1]->amount . '<br />';
//  echo 'Pricing Options : ' . $Obj->data[$i]->pricingOptions->fareType[0] . '<br />'; // Object need conditions and loop
//  echo 'Included Checked Bags Only : ' . $Obj->data[$i]->pricingOptions->includedCheckedBagsOnly . '<br />';
//  echo 'Validating Airline Codes : ' . $Obj->data[$i]->validatingAirlineCodes[0] . '<br />'; // Object need conditions and loop 
    
//    if(count($Obj->data[$i]->travelerPricings)>1){
//        for($p=0;$p<count($Obj->data[$i]->travelerPricings); $p++){
//  echo 'Traveler Id : ' . $Obj->data[$i]->travelerPricings[$p]->travelerId . '<br />';
//  echo 'Fare Option : ' . $Obj->data[$i]->travelerPricings[$p]->fareOption . '<br />';
//  echo 'Traveler Type : ' . $Obj->data[$i]->travelerPricings[$p]->travelerType . '<br />';
//  echo 'Traveler currency : ' . $Obj->data[$i]->travelerPricings[$p]->price->currency . '<br />';
//  echo 'Traveler Total : ' . $Obj->data[$i]->travelerPricings[$p]->price->total . '<br />';
//  echo 'Traveler base : ' . $Obj->data[$i]->travelerPricings[$p]->price->base . '<br />';
//  echo 'Fare Details By Segment ID : ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->segmentId . '<br />';
//  echo 'Fare Details By Segment Cabin : ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->cabin . '<br />';
//  echo 'Fare Details By Segment Fare Basis : ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->fareBasis . '<br />';
//  echo 'Fare Details By Segment class : ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->class . '<br />';
//  echo 'Fare Details By Segment included Checked Bags | Weight: ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->includedCheckedBags->weight . '<br />';
//  echo 'Fare Details By Segment included Checked Bags | Weight Unit: ' . $Obj->data[$i]->travelerPricings[$p]->fareDetailsBySegment[0]->includedCheckedBags->weightUnit . '<br />';  
//            
//        }
//        
//    }
//    else{
//  echo 'Traveler Id : ' . $Obj->data[$i]->travelerPricings[0]->travelerId . '<br />';
//  echo 'Fare Option : ' . $Obj->data[$i]->travelerPricings[0]->fareOption . '<br />';
//  echo 'Traveler Type : ' . $Obj->data[$i]->travelerPricings[0]->travelerType . '<br />';
//  echo 'Traveler currency : ' . $Obj->data[$i]->travelerPricings[0]->price->currency . '<br />';
//  echo 'Traveler Total : ' . $Obj->data[$i]->travelerPricings[0]->price->total . '<br />';
//  echo 'Traveler base : ' . $Obj->data[$i]->travelerPricings[0]->price->base . '<br />';
//  echo 'Fare Details By Segment ID : ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->segmentId . '<br />';
//  echo 'Fare Details By Segment Cabin : ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->cabin . '<br />';
//  echo 'Fare Details By Segment Fare Basis : ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->fareBasis . '<br />';
//  echo 'Fare Details By Segment class : ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->class . '<br />';
//  echo 'Fare Details By Segment included Checked Bags | Weight: ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weight . '<br />';
//  echo 'Fare Details By Segment included Checked Bags | Weight Unit: ' . $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weightUnit . '<br />';
//    }
    
//  echo '<br />'; 
}


//echo $resp;

//curl -X GET "https://test.api.amadeus.com/v1/shopping/flight-dates?origin=ADL&destination=DPS&departureDate=2022-02-04,2022-08-10&oneWay=false&duration=2,7&nonStop=false&maxPrice=200&viewBy=DURATION" -H  "accept: application/vnd.amadeus+json" -H  "Authorization: Bearer RQCm691ejTCNurSS4CopT4FZMIZZ"

?>
