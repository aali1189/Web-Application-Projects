<?php

 


$Segment = 3;
$Arr = array('A','B','C','D','F');




if(count($Arr)>1){
    

    //Departure statement
    
    echo 'Departure : '. $Arr[0] . '<br />';
    
    // A
    echo  '|<br/>';
    echo  '|<br/>';
    echo  '|<br/>';
    // |
    // |
    // O
    
    if($Segment>2){
       // Transit statement
       
        for($j=1;$j<count($Arr);$j++){
            //Layover statement
          
           echo '<br>Departure : '. $Arr[$j];
           echo '<br>Arrival : '. $Arr[$j+1];
           echo '<br/>Layover : '. '<br />';
        }
            
        }else{
        
    }
        
        
    }
    
    
   echo '<br /><br />Arrival : '. $Arr[(count($Arr)-1)]; 
    
}else{
    
   //Arrval statement 
  
}

 


?>



