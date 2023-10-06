<?php 


class Content {
 
    
    
    function Flights(){ ?>
            
<div class="Content">

<div class="row Content-body">
    
    
  <div class="form ">
      <div class="form-group row">
    <div style="position: relative;left: 204px;" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group">
        <button  class="btn btn-primary" onclick="one_way()">One way</button>
        <button class="btn btn-primary" onclick="round_trip()">Round trip</button>
    </div> 
     </div> 
    <form method="post" action="">
        
        
<div class="form-group row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 input-group">
    <span class="input-group-addon"><i class="fas fa-plane-departure"></i></span>
    <input  list="Origin-airport" type="text" class="form-control origin" id="origin"  name="originLocationCode" onkeyup="Origin_airport(this.value)" />
<datalist id="Origin-airport">
<!--
    <option value="KRT">(KRT)</option>
    <option value="DXB">(DXB)</option>
-->
    </datalist>
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 input-group">
    <span class="input-group-addon"><i class="fas fa-plane-arrival"></i></span>
    <input list="Destination-airport" type="text" class="form-control Destination" id="destination" name="destinationLocationCode" onkeyup="Destination_airport(this.value)" />
<datalist id="Destination-airport">
</datalist>
    
    </div>
    
   
     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
<input class="form-control Calendar-one-way" id="departureDate" type="date" name="departureDate"/>
    
    </div>
    
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
<input disabled class="form-control Calendar-round-trip" id="departureReturnDate" type="date" name="returnDate"/>
    
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 input-group">
        
    <span class="input-group-addon"><i class="fas fa-users"></i></span>
    <div class="dropdown">
  <Button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"></Button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
<li>
    <div class="Travelers">
    <span class="input-group-addon"><i class="fas fa-user"></i></span>
    <input class="form-control" onkeyup="setTravelers('adults', this.value)" id="adults" placeholder="Adults" type="number" name="adults" value="1" />
    
    </div>
    
      
</li>
<li>
    <div class="Travelers">
    <span class="input-group-addon"><i class="fas fa-child"></i></span>
    <input class="form-control" onkeyup="setTravelers('children', this.value)" id="children" placeholder="children" type="number" name="children" value="0" />
    </div> 
      </li>
      
<li>
    <div class="Travelers">
        <span class="input-group-addon"><i class="fas fa-baby"></i></span>
    <input class="form-control" onkeyup="setTravelers('infants', this.value)" id="infants" placeholder="infants" type="number" name="infants" value="0" />
    </div>
    
      
      </li>
  </ul>
</div>
    
    </div>
    
    
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 input-group">
<span class="input-group-addon"><i class="fas fa-couch"></i></span>
<select class="form-control class-Travelers" id="travelClass" name="travelClass">
<option value="ECONOMY">ECONOMY</option>
<option value="PREMIUM_ECONOMY">PREMIUM_ECONOMY</option>
<option value="BUSINESS">BUSINESS</option>
<option value="FIRST">FIRST</option>
</select>
 </div>  
    
    
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 input-group Button">
<input class="Search btn btn-prmary" type=submit  value="Search Flights" />

    </div>
    </div>     
 </form>
   </div> 
<?php 
 
   $CurrencyCode = "USD";
   $MaxPrice = 1000000;
   $MaxOfResul = 10;
   $Obj;
   $Airport;
//         $Origin, $Destination, $Departure, $Adults, $Children, $Infants, $TravelClass,    $IncludedAirlineCodes, $NonStop, $CurrencyCode, $MaxPrice, $MaxOfResult
        
if($_POST['originLocationCode'] != null && $_POST['destinationLocationCode'] != null){
   include('Airports.php');   
   $Airport = new Airports();
    
    if($_POST['returnDate'] != null){
      $Obj = json_decode(  FOS("originLocationCode=".$_POST['originLocationCode']."&destinationLocationCode=".$_POST['destinationLocationCode'].  "&departureDate=".$_POST['departureDate']."&returnDate=".$_POST['returnDate']."&adults=".$_POST['adults']."&children=".$_POST['children']."&infants=".$_POST['infants']."&travelClass=".$_POST['travelClass']."&max=".$MaxOfResul."&currencyCode=".$CurrencyCode));  
    }else{
     $Obj = json_decode(  FOS("originLocationCode=".$_POST['originLocationCode']."&destinationLocationCode=".$_POST['destinationLocationCode'].  "&departureDate=".$_POST['departureDate']."&adults=".$_POST['adults']."&children=".$_POST['children']."&infants=".$_POST['infants']."&travelClass=".$_POST['travelClass']."&max=".$MaxOfResul."&currencyCode=".$CurrencyCode));    
    }


    

    ?>

<div class="panel panel-primary"> 
    <div class="panel-heading">
       <p id="Count">Count : <?php echo $Obj->meta->count; ?></p> 
    </div>
    
    <div class="panel-body row">
  
        
        <?php for($i=0; $i<$Obj->meta->count; $i++){ 
        $Aircraft = json_decode(json_encode($Obj->dictionaries->aircraft),true);
        $Carriers = json_decode(json_encode($Obj->dictionaries->carriers),true);
  //echo 'Operating : ' . $Obj->data[$i]->itineraries[0]->segments[0]->operating->carrierCode . '<br />';
        
//   if(count($Obj->data[$i]->itineraries[0]->segments)>1){
//                for($j=0;$j<count($Obj->data[$i]->itineraries[0]->segments);$j++){     
//             
//   
//  echo 'Segments : ' . count($Obj->data[$i]->itineraries[0]->segments) . '<br />';
//  echo 'Departure : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->departure->iataCode . '<br />';
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->departure->at . '<br />'; 
//  echo 'Arrival : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->iataCode . '<br />'; 
//  echo 'Terminal : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->terminal . '<br />'; 
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->arrival->at . '<br />';
//  echo 'Carrier Code : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->carrierCode . '<br />';
//  echo 'Number : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->number . '<br />';
//  echo 'Aircraft Code : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->aircraft->code . '<br />';
//  echo 'Operating : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->operating->carrierCode . '<br />';
//  echo 'Duration : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->duration . '<br />';
//  echo 'ID : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->id . '<br />';
//  echo 'Number Of Stops : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->numberOfStops . '<br />';
//  echo 'Blacklisted In EU : ' . $Obj->data[$i]->itineraries[0]->segments[$j]->blacklistedInEU . '<br />';
//                    
//                }
//   }else{
//                    
//  echo 'Segments : ' . count($Obj->data[$i]->itineraries[0]->segments) . '<br />';
//  echo 'Departure : ' . $Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode . '<br />';
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[0]->departure->at . '<br />'; 
//  echo 'Arrival : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode . '<br />'; 
//  echo 'Terminal : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->terminal . '<br />'; 
//  echo 'At : ' . $Obj->data[$i]->itineraries[0]->segments[0]->arrival->at . '<br />';
//  echo 'Carrier Code : ' . $Obj->data[$i]->itineraries[0]->segments[0]->carrierCode . '<br />';
//  echo 'Number : ' . $Obj->data[$i]->itineraries[0]->segments[0]->number . '<br />';
//  echo 'Aircraft Code : ' . $Obj->data[$i]->itineraries[0]->segments[0]->aircraft->code . '<br />';
//  echo 'Operating : ' . $Obj->data[$i]->itineraries[0]->segments[0]->operating->carrierCode . '<br />';
//  echo 'Duration : ' . $Obj->data[$i]->itineraries[0]->segments[0]->duration . '<br />';
//  echo 'ID : ' . $Obj->data[$i]->itineraries[0]->segments[0]->id . '<br />';
//  echo 'Number Of Stops : ' . $Obj->data[$i]->itineraries[0]->segments[0]->numberOfStops . '<br />';
//  echo 'Blacklisted In EU : ' . $Obj->data[$i]->itineraries[0]->segments[0]->blacklistedInEU . '<br />';
   //$Aircraft = array(json_encode($Obj->dictionaries->aircraft));

        
        //echo 'Aircraft : ' . $array[7M8] . '<br />';     
        
                    
//                }
        ?>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 panel panel-default Card" type="button" data-toggle="collapse" data-target="#Details-<?php echo $Obj->data[$i]->id; ?>" aria-expanded="false" aria-controls="Details"> 
       <div class="panel-heading row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 Airline-logo">
            <?php 
            if((count($Obj->data[$i]->itineraries[0]->segments))>1){
                for($P=0;$P<count($Obj->data[$i]->itineraries[0]->segments);$P++){?> 
           
            <img src="https://daisycon.io/images/airline/?width=150&height=150&iata=<?php echo $Obj->data[$i]->itineraries[0]->segments[$P]->carrierCode; ?>">
               <?php  }                
            }
            ?>
           </div>
           
        <?php 
        $Adult = 0;
        $Child = 0;
        $Infant=0;
        if(count($Obj->data[$i]->travelerPricings)>0){
            
            for($p=0;$p<count($Obj->data[$i]->travelerPricings); $p++){ 
             if($Obj->data[$i]->travelerPricings[$p]->travelerType == "ADULT"){   
                 $Adult++;
          }else if($Obj->data[$i]->travelerPricings[$p]->travelerType == "CHILD"){ 
                 $Child++;
           }else{  
                 $Infant++;
        } } } ?>
           

        
    </div>
    
    <div class="panel-body">
    <div class="row">
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Card-Header">
        <ul>

        <li class="Classes"><p><?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->cabin;  ?></p></li>
        
        <?php if($Adult>0){ ?>
        <li  class="Traveler-type">
           <span><i class="fas fa-user"></i><?php echo $Adult; ?></span>
       </li>
        <?php } ?>
      
        <?php if($Child>0){ ?>
           <li class="Traveler-type">
           <span><i class="fas fa-child"></i><?php echo $Child; ?></span>
       </li>
        <?php } ?>
           
        <?php if($Infant>0){ ?>
       <li class="Traveler-type">
           <span><i class="fas fa-baby"></i><?php echo $Infant; ?></span>
       </li>
        <?php } ?>
        
   
        
        <?php if($Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags>1) {?>
        <li class="Traveler-type">
        <i style="color:#4caf50" class="fas fa-suitcase"></i>
            <span><?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weight; ?>  
          <?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weightUnit; ?></span></li>
         <?php }else{ ?> 
           <li class="Traveler-type">
        <i style="color:#d03434" class="fas fa-suitcase"></i></li>
          <?php } ?>
         <li class="Price" style="width:<?php echo Card_Header_Price($Adult, $Child, $Infant); ?>"><span><?php echo $Obj->data[$i]->price->currency; ?></span><p><?php echo number_format($Obj->data[$i]->price->total,2); ?></p></li>
        </ul>
        
         </div>
     
      
           

        <?php if(count($Obj->data[$i]->itineraries)>1){
              for($s=0; $s<count($Obj->data[$i]->itineraries);$s++){?>
          <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12 Card-Body">
           
        <ul>
            <li><p><?php echo $Obj->data[$i]->itineraries[$s]->segments[0]->departure->iataCode;  ?></p></li>
            <li class="Time">
            <ul>
                <li class="Time-Left"><span><?php echo ConvertTime($Obj->data[$i]->itineraries[$s]->segments[0]->departure->at); ?>
                    </span>
                    <?php if(ConvertAMPM(ConvertTime($Obj->data[$i]->itineraries[$s]->segments[0]->departure->at)) == "am"){ ?>
                    <i class="fas fa-sun"></i>
                    <?php }else{ ?>
                    <i class="fas fa-moon"></i>
                    <?php }?>
                </li>
                <li class="Path">
                <ul>
                <li class="departure-icon"><i class="fas fa-plane-departure"></i></li>  
                <li class="path-icon"><p style="display:<?php if(count($Obj->data[$i]->itineraries[$s]->segments)>1){echo 'block'; }else{ echo 'none'; }?>"></p></li>
                <li class="arrival-icon"><i class="fas fa-plane-arrival"></i></li>
                </ul>
                </li>
                <li class="Time-Right"><span><?php echo ConvertTime($Obj->data[$i]->itineraries[$s]->segments[count($Obj->data[$i]->itineraries[$s]->segments)-1]->arrival->at); ?></span> 
                    <?php if(ConvertAMPM(ConvertTime($Obj->data[$i]->itineraries[$s]->segments[count($Obj->data[$i]->itineraries[$s]->segments)-1]->arrival->at)) === "am"){ ?>
                    <i style="color: #c19730;font-size: 20px" class="fas fa-sun"></i>
                    <?php }else{ ?>
                    <i style="font-size: 20px" class="fas fa-moon"></i>
                    <?php } ?>
                </ul>
            </li>
            
            <li><p><?php echo $Obj->data[$i]->itineraries[$s]->segments[count($Obj->data[$i]->itineraries[$s]->segments)-1]->arrival->iataCode; ?></p></li>
            </ul>
            
            
        </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Card-Footer">
         <ul>
             
            <li class="Departure-date">
                <span>
                <?php echo ConvertDate($Obj->data[$i]->itineraries[$s]->segments[0]->departure->at); ?></span></li>
             
            <li class="Duration">
<span class="Time"><?php echo str_replace("H","H ",trim($Obj->data[$i]->itineraries[$s]->duration, "PT")); ?></span>
                
                <?php 
        
        if((count($Obj->data[$i]->itineraries[$s]->segments))>1){ ?>
                <span class="Stop">(<?php echo (count($Obj->data[$i]->itineraries[$s]->segments)-1); ?>) Stop
                
                </span>
                <?php }else { ?>
                
                <span class="Direct">(Direct)</span>
                <?php } ?>
            </li>
             
            <li class="Arrival-date"><span>
                <?php echo ConvertDate($Obj->data[$i]->itineraries[$s]->segments[(count($Obj->data[$i]->itineraries[$s]->segments))-1]->arrival->at); ?>
                </span></li>
            </ul>
            
          
        </div>
        <hr /> 
        
        <?php }}else{ ?>
        
                <div class="Col-lg-12 col-md-12 col-sm-12 col-xs-12 Card-Body">
           
        <ul>
            <li><p><?php echo $Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode;  ?></p></li>
            <li class="Time">
            <ul>
                <li class="Time-Left"><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->departure->at); ?>
                    </span>
                    <?php if(ConvertAMPM(ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->departure->at)) == "am"){ ?>
                    <i class="fas fa-sun"></i>
                    <?php }else{ ?>
                    <i class="fas fa-moon"></i>
                    <?php }?>
                </li>
                <li class="Path">
                <ul>
                <li class="departure-icon"><i class="fas fa-plane-departure"></i></li>  
                 <!--<?php echo str_replace("M", "", str_replace("H",".", trim($Obj->data[$i]->itineraries[0]->segments[0]->duration, "PT"))); ?>-->
                 
              
                <li class="path-icon"><p style="display:<?php if(count($Obj->data[$i]->itineraries[0]->segments)>1){echo 'block'; echo ";left:". Tracking($Obj->data[$i]->itineraries[0]->duration, $Obj->data[$i]->itineraries[0]->segments[0]->duration) . "%";  }else{ echo 'none'; }?>"></p></li>
          
                
                
                <li class="arrival-icon"><i class="fas fa-plane-arrival"></i></li>
                </ul>
                </li>
                <li class="Time-Right"><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[count($Obj->data[$i]->itineraries[0]->segments)-1]->arrival->at); ?></span> 
                    <?php if(ConvertAMPM(ConvertTime($Obj->data[$i]->itineraries[0]->segments[count($Obj->data[$i]->itineraries[0]->segments)-1]->arrival->at)) === "am"){ ?>
                    <i class="fas fa-sun"></i>
                    <?php }else{ ?>
                    <i class="fas fa-moon"></i>
                    <?php } ?>
                </ul>
            </li>
            
          
            <li><p><?php echo $Obj->data[$i]->itineraries[0]->segments[count($Obj->data[$i]->itineraries[0]->segments)-1]->arrival->iataCode; ?></p></li>
            </ul>
            
            
        </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Card-Footer">
         <ul>
             
            <li class="Departure-date">
                <span>
                <?php echo ConvertDate($Obj->data[$i]->itineraries[0]->segments[0]->departure->at); ?></span></li>
             
            <li class="Duration">
<span class="Time"><?php echo str_replace("H","H ",trim($Obj->data[$i]->itineraries[0]->duration, "PT")); ?></span>
                
                <?php 
        
        if((count($Obj->data[$i]->itineraries[0]->segments))>1){ ?>
                <span class="Stop">(<?php echo (count($Obj->data[$i]->itineraries[0]->segments)-1); ?>) Stop
                
                </span>
                <?php }else { ?>
                
                <span class="Direct">(Direct)</span>
                <?php } ?>
            </li>
             
            <li class="Arrival-date"><span>
                <?php echo ConvertDate($Obj->data[$i]->itineraries[0]->segments[(count($Obj->data[$i]->itineraries[0]->segments))-1]->arrival->at); ?>
                </span></li>
            </ul>
            
          
        </div>
        <?php } ?>
        
    
        </div>
    </div>
    
<div class="collapse Details" id="Details-<?php echo $Obj->data[$i]->id; ?>">
  
  <div class="Card-Details row">
     
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 Times">
        
        <?php if((count($Obj->data[$i]->itineraries[0]->segments))>1){?> 
        
      <ul>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->departure->at); ?></span></li>
        <li><span><?php echo str_replace("H","H ",trim($Obj->data[$i]->itineraries[0]->segments[0]->duration, "PT")); ?></span></li>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->arrival->at); ?></span></li>
      </ul>
        
    <?php for($t=1;$t<(count($Obj->data[$i]->itineraries[0]->segments));$t++){ ?>
    
    <ul class="Stop_Duration">
        <li></li>
        <li><?php echo CalculateHours($Obj->data[$i]->itineraries[0]->segments[0]->arrival->at, $Obj->data[$i]->itineraries[0]->segments[$t]->departure->at); ?></li>
        <li></li>
    </ul>
                    
      <ul>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[$t]->departure->at); ?></span></li>
        <li><span><?php echo str_replace("H","H ",trim($Obj->data[$i]->itineraries[0]->segments[$t]->duration, "PT")); ?></span></li>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[$t]->arrival->at); ?></span></li>
      </ul>
        
        <?php } ?>
   
       <?php }else{ ?>
        <ul>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->departure->at); ?></span></li>
        <li><span><?php echo str_replace("H","H ",trim($Obj->data[$i]->itineraries[0]->segments[0]->duration, "PT")); ?></span></li>
        <li><span><?php echo ConvertTime($Obj->data[$i]->itineraries[0]->segments[0]->arrival->at); ?></span></li>
        </ul>
        
        <?php }?>
    </div>
    
    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 Path">
        
     <?php if((count($Obj->data[$i]->itineraries[0]->segments))>1){ ?>
         
         <div class="icons-group-path">
      <div class="icons-plane"><i class="fas fa-plane"></i></div>
      <div class="icons-path"></div>
      <div class="icons-location"><span><i class="fas fa-circle"></i></span></div>
     </div>
         
         <?php for($p=1; $p<(count($Obj->data[$i]->itineraries[0]->segments));$p++){
            //echo "Segment" . count($Obj->data[$i]->itineraries[0]->segments) . "<br/>";
                
            //Segments more than 2 
         ?>

        <div class="icons-group-path-layover">
         <i class="fa fa-ellipsis-v"></i>
        </div>
      
       <?php } ?>
                                                                   
      <div class="icons-group-path">
      <div class="icons-plane"><i class="fas fa-circle"></i></div>
      <div class="icons-path"></div>
      <div class="icons-location"><span><i class="glyphicon glyphicon-map-marker
"></i></span></div>
     </div>     
     
          <?php   }else{ ?>
      <div class="icons-group-path">
      <div class="icons-plane"><i class="fas fa-plane"></i></div>
      <div class="icons-path"></div>
      <div class="icons-location"><span><i class="glyphicon glyphicon-map-marker
"></i></span></div>
     </div>
         
     
         <?php } ?>
      </div> 
      
    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 Flight-Details">
    <?php if((count($Obj->data[$i]->itineraries[0]->segments))>1){ ?>
<!--      First flight  -->
      <div class="icons-group-path">
      <div class="icons-plane"><p> <?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode; ?>)</p></div>
      <div class="icons-path">
         <p><?php echo $Carriers[''.$Obj->data[$i]->itineraries[0]->segments[0]->carrierCode.'']; ?></p>
         <p><?php echo $Obj->data[$i]->itineraries[0]->segments[0]->number; ?> | <?php echo $Aircraft[''.$Obj->data[$i]->itineraries[0]->segments[0]->aircraft->code.'']; ?></p>
         <p><?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->cabin; ?> class</p>
         </div>
      <div class="icons-location"><p><?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode; ?>)</p></div>
     </div> 
      
    <?php 
    //Segmnet loop    
    for($d=1; $d<(count($Obj->data[$i]->itineraries[0]->segments));$d++){ 
        
         ?>
            
   
         
  
    <div class="icons-group-path-Connection">
      <div class="icons-plane"><p> <?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[$d]->departure->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[$d]->departure->iataCode; ?>)</p></div>
      <div class="icons-path">
         <p><?php echo $Carriers[''.$Obj->data[$i]->itineraries[0]->segments[$d]->carrierCode.'']; ?></p>
         <p><?php echo $Obj->data[$i]->itineraries[0]->segments[$d]->number; ?> | <?php echo $Aircraft[''.$Obj->data[$i]->itineraries[0]->segments[$d]->aircraft->code.'']; ?></p>
         <p><?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[$d]->cabin; ?> class</p>
         </div>
      <div class="icons-location"><p><?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[$d]->arrival->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[$d]->arrival->iataCode; ?>)</p></div>
     </div> 
         
<!--
           <div class="icons-group-path-layover"> 
              <div class="icons-path">
              <p>
              <i class="glyphicon glyphicon-random"></i>
              </p>
              </div>
           </div>
           
-->
    
         
       <?php } ?>
         
<!--         Last Flight   -->
                                                         
         <?php    }else{ ?>  
         
<!--         Segments null -->
         <div class="icons-group-path">
      <div class="icons-plane"><p> <?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[0]->departure->iataCode; ?>)</p></div>
      <div class="icons-path">
         <p><?php echo $Carriers[''.$Obj->data[$i]->itineraries[0]->segments[0]->carrierCode.'']; ?></p>
         <p><?php echo $Obj->data[$i]->itineraries[0]->segments[0]->number; ?> | <?php echo $Aircraft[''.$Obj->data[$i]->itineraries[0]->segments[0]->aircraft->code.'']; ?></p>
         <p><?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->cabin; ?> class</p>
         </div>
      <div class="icons-location"><p><?php echo $Airport->Get_Airports_Details(''.$Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode.'')['name']; ?> (<?php echo $Obj->data[$i]->itineraries[0]->segments[0]->arrival->iataCode; ?>)</p></div>
     </div> 
         
         
         <?php } ?>
      </div> 
      
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Arrive-Details">
      <div class="icons-group-path">
          <div class="Calender-icon">
          <i class="glyphicon glyphicon-calendar"></i>
          </div>
          <div class="Note"><p>You will arrive on</p></div>
          <div class="Date"><p><?php echo ConvertDateStr($Obj->data[$i]->itineraries[0]->segments[(count($Obj->data[$i]->itineraries[0]->segments))-1]->arrival->at); ?>
</p></div>
        </div>
      </div>
     
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Baggage-Details">
      <div class="Baggage-Title"><p>Baggage allowance and policies</p></div>
    <br />
      <div class="Baggage-Weight">
        <i class="fas fa-suitcase"></i><p>FREE Checked Baggage up to <?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weight; ?> 
          <?php echo $Obj->data[$i]->travelerPricings[0]->fareDetailsBySegment[0]->includedCheckedBags->weightUnit; ?> (2 pieces)</p></div>
        <br />
      <div class="Baggage-Fee"><i class="glyphicon glyphicon-plane"></i><p>No Change Fee</p>
        </div>
        <br />
      <div class="Baggage-policies">
        <i class="glyphicon glyphicon-book"></i>
          <p>Read full policies</p>
        </div>
      </div>
    
  </div>
  
  
</div>
    
        </div> 
        
    <?php } //end for loop
          
         // }else{ ?>
        
        
        
        
        
      <?php //} } ?>  
    </div>
    </div>
    
 
    
  <?php }else {
    echo $Obj;
}
    
    ?>  


</div>
 
</div>
    
        
    <?php }
 
    function Contact(){?>
        
       
<div class="Content">

<h3>Contact</h3>

<div class="row Content-body">

</div>
    
</div>

 
   <?php }
    
    function Cart(){?>
        
    
<div class="Content">

<h3>Cart</h3>

    <?php 
   
       if(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])){ 
    ?>
<div class="row Content-body">

    
<ul>
<?php 
         
for($i=0; $i<count(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])); $i++){ 
    ?>
<li>
<div class="panel panel-primary"> 
    <div class="panel-heading">
    <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][3]; ?> 
    </div>
    
    <div class="panel-body">
        <p>
        
<?php echo "Seller : " . Get_Exchange_Seller_By_Id(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][1])[0][2]; ?>
        </p>
    <p>
<?php 
    
  echo "SDG : " .
Convert_Rate_Percentage(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][4],Get_Exchange_Seller_By_Id(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][1])[0][5]); ?>
        
    </p>
        
    <p>
       <?php 
   
    echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][3] ." : ".convert(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][5]);
    
     ?>
    </p>

      
        <div>
           <?php if(Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]==='Success'){ ?> 
            <div class="alert alert-success" role="alert">
            <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]; ?>
            </div>
            <?php }else{ ?>
        <div class="alert alert-warning" role="alert">
            <?php echo Get_Exchange_Items_Cart_By_Id($_SESSION['ID'])[$i][6]; ?>
            </div>
           <?php } ?>
        </div>
    </div>
    </div>
    
</li>
<?php } ?>
</ul>


    
</div>
    <?php }else{ ?>
           
     <div class="panel panel-primary"> 
    <div class="panel-heading">
        <p>No resulit</p>
           </div>
           </div>
    <?php   } ?>
</div> 

    
        
   <?php }
    
    function Orders(){ ?>
    
<div class="Content">

<h3>Orders</h3>

<div class="row Content-body">

    
<ul>

<?php 
// Refresh        
if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])>0){
    
for($i=0; $i<count(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])); $i++){ 
    ?>
<li>
<!--
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
-->
<div class="panel panel-primary"> 
    <div class="panel-heading">
 
     <form class="Orders" action="Lib/Orders/index.php" method="get">
        <label><?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
        ?>
         </label>
         
         <label class="text-right">
        <?php
//    Budget - order
//    echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3] ." : ". (convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5]));
    
 $Code_cu = Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
 $Convert_cu = convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5]);
    
    echo "Get budget : " . (Get_Available_Budget_By_Id($_SESSION['ID'], Get_Currency_By_Id_Code($Code_cu)[0][0])[0][2] - ($Convert_cu));
        ?>
        
         </label>
         
<input style="display:none" type="text" name="Order_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][0];
        ?>" />
<input style="display:none" type="text" name="Seller_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][1];
        ?>" />   
<input style="display:none" type="text" name="Buyer_Id" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2];
        ?>" />
<input style="display:none" type="text" name="Foreign_cu" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3];
        ?>" />        
<input style="display:none" type="text" name="Amount_order" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4];
        ?>" /> 
<input style="display:none" type="text" name="Amount_Rate" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5];
        ?>" />
    <input style="display:none" type="text" name="Status" value="<?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6];
        ?>" />
    
    <input style="display:<?php if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6] === 'Pending'){ echo 'block'; }else{ echo 'none'; } ?>" type="submit" class="btn btn-danger" value="Appliy" />
    </form>   
     
    </div>
    
    <div class="panel-body">
    <p class="alert alert-success"><?php echo  Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][1] . " " .Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][2]; ?> </p>
        
 
        
    <p>Email : <?php echo  Get_User_By_Id(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][2])[0][3]; ?></p>
    <p>
       <?php 
    
    echo "SDG : " . Convert_Rate_Percentage(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Seller_By_Id_menu($_SESSION['ID'])[0][5]); ?>
    </p>
    <p>
       <?php echo Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][3] ." : ". convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5])  ;
    
    //convert(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][5], Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][4]); ?>
    </p>
      
        <div>
        <?php if(Get_Exchange_Items_Order_By_Id($_SESSION['ID'])[$i][6] === 'Pending'){?>
        <div class="alert alert-warning" role="alert">
        <p>Pending</p>
            </div>
        <?php }else {?>
             <div class="alert alert-success" role="alert">
        <p>Applied</p>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
    
</li>
<?php }}else{ ?>
    <p>No result</p>
<?php } ?>

</ul>


    
</div>
</div> 
    

    <?php }
    
    function Seller(){ ?>
        
       <div class="Content">

<h3>Become a seller</h3>

<div class="row Content-body">
<!--
$Arr[$Row][0] = $Rows['Id'];
$Arr[$Row][1] = $Rows['Seller_Id'];
$Arr[$Row][2] = $Rows['Buyer_Id'];
$Arr[$Row][3] = $Rows['Foreign_cu'];
$Arr[$Row][4] = $Rows['Amount_order'];
$Arr[$Row][5] = $Rows['Amount_Rate'];
$Arr[$Row][6] = $Rows['Status'];
-->
<div class="panel panel-primary"> 
    <div class="panel-heading">

     <h2>Seller subscription</h2>
    </div>
    
    <div class="panel-body">
        <div class="Budget-border">
        
           <form class="Seller" action="Lib/Seller/Currency_List/index.php" method="post">
<!--         Get user id -->
        <input style="display:none" name="ID" value="<?php echo Get_User_By_Id($_SESSION['ID'])[0][0];
        ?>" />
          <label>Currency</label> 
        <select class="form-control" name="Currency">
            <?php for($i=0;$i<count(Get_Currency_All());$i++){?>
    <option value="<?php echo Get_Currency_All()[$i][0]; ?>"><?php echo Get_Currency_All()[$i][1]; ?></option>
               <?php } ?>
               </select>
          <label>Budget</label> 
         <input type="text" class="form-control" name="Budget"  />
    <input class="btn btn-primary" type="submit" value="Add" />
    
    </form>  
            
<div class="List-view">
<table class="table">
<tr>
  <td>Currency</td>
  <td>Budget</td>
  <td>Delete</td>
</tr>

<?php
$arr = Get_Budget_By_Id($_SESSION['ID']);
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo Get_Currency_By_Id($arr[$i][1])[$i][1]; ?></td>
  <td id="<?php echo $arr[$i][2]; ?>"><?php echo $arr[$i][2]; ?></td>
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Seller/Currency_List/Delete_Currency.php?ID=<?php echo $arr[$i][0]; ?>&Currency=<?php echo $arr[$i][1]; ?>" method="post">
        <input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
</tr>
<?php }
} ?>
</table>        
</div>
          </div>
        
        
        <div class="Budget-border">
                   <form class="Seller" action="Lib/Seller/index.php" method="post">
<!--         Get user id -->
        <input style="display:none" name="ID" value="<?php echo Get_User_By_Id($_SESSION['ID'])[0][0];
        ?>" />
<!--        Currency list -->
<input style="display:none" name="Currency_Id" value="<?php for($i=0; $i<count($arr); $i++){ if($i<count($arr)-1){echo $arr[$i][1] . " "; }else {echo $arr[$i][1]; } } ?>" />
                       
          <label>Price</label> 
       <input type="number" class="form-control" name="Price"  />
          <label>Market Name</label> 
         <input type="text" class="form-control" name="Market_Name"  />
    <input class="btn btn-danger" type="submit" value="Subscription" />
    
    </form>  
           
        </div>
    </div>
    </div>
    



    
</div>
</div> 

    <?php }
    
    function PageNotFound(){ ?>
        
  
       <div class="Content">

<h3>Page Not Found ...</h3>

<div class="row Content-body">

<div class="panel panel-primary"> 
 
    
    <div class="panel-body">
    
    <h2>Page Not Found ... </h2>    

    </div>
    </div>
    



    
</div>
</div> 

   <?php }
    
    
}




?>