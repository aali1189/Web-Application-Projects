
function Edit_Dialog(id, ID_name, Element_ID){
document.getElementById(ID_name).value = id;
document.getElementById(Element_ID).style.display = 'block';
}

function Close_Dialog(ID_name){

  document.getElementById(ID_name).style.display = 'none';

}


$(document).ready(function(){
    
  $("#Amount").click(function(){
      console.log("Clicked");
  });  
});
