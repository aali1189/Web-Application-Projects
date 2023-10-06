function Origin_airport(str) {
  if (str.length==0) {
   // document.getElementById("airport").innerHTML="";
    //document.getElementById("origin").style.border="0px";
    return;
  }
    
  var xmlhttp=new XMLHttpRequest();
    
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        
     document.getElementById("Origin-airport").innerHTML = '<option value="' +  JSON.parse(this.responseText)['iata']  + '">'+JSON.parse(this.responseText)['name']+'</option>';


    }
  }
  
  xmlhttp.open("GET","http://"+window.location.host+"/Lib/Classes/Airports.php?airport="+str,true);
  xmlhttp.send();
}

function Destination_airport(str) {
  if (str.length==0) {
   // document.getElementById("airport").innerHTML="";
    //document.getElementById("origin").style.border="0px";
    return;
  }
    
  var xmlhttp=new XMLHttpRequest();
    
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
        
     document.getElementById("Destination-airport").innerHTML = '<option value="' +  JSON.parse(this.responseText)['iata']  + '">'+JSON.parse(this.responseText)['name']+'</option>';


    }
  }
  
  xmlhttp.open("GET","http://"+window.location.host+"/Lib/Classes/Airports.php?airport="+str,true);
  xmlhttp.send();
}






