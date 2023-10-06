
function Display_single_driver(id, Name, Phone, Email, Creation_Date, Internal_Driver_ID, License_number, Current_subscription_plan, Note, VehicleName, Model, Color, type, Production_year, Board_number, Plate_number, Number_Of_Passenger_Seats, Air_condition, Non_smoking, Smoking_allowed, Extra_luggage_space, Child_Seat, Person_with_disabilities, Pets_allowed, Bike_mount, type, Balance){

   // alert(name+" | "+ phone);
document.getElementById("id_js").value = id;
document.getElementById("name_js").value = Name;
document.getElementById("phone_js").value = Phone;
document.getElementById("Email_js").value = Email;
//document.getElementById("Creation_date_js").value = Creation_Date;
document.getElementById("Internal_driver_ID_js").value = Internal_Driver_ID; 
document.getElementById("License_number_js").value = License_number;
document.getElementById("Model_js").value = Model;
document.getElementById("type_js").value = type; 
document.getElementById("Production_year_js").value = Production_year; 
document.getElementById("Board_number_js").value = Board_number;
document.getElementById("Plate_number_js").value = Plate_number;
document.getElementById("Current_subscription_plan_js").value = Current_subscription_plan;
document.getElementById("Note_js").value = Note;
document.getElementById("VehicleName_js").value = VehicleName;
document.getElementById("Color_js").value = Color;
document.getElementById("Number_of_passenger_seats_js").value = Number_Of_Passenger_Seats;
document.getElementById("Air_condition_js").value = Air_condition;
//document.getElementById("Non_smoking_js").value = Non_smoking;

//Number_of_passenger_seats_js
//Color_js
//document.getElementById("Balance_js").value = Balance;


}

//<td><?php echo $row['Id']; ?></td>
//<td><?php echo $row['name']; ?></td>
//<td><?php echo $row['period'] ?></td>
//<td><?php echo $row['Fee_per_period'] ?></td>
//<td><?php echo $row['Include_Orders_Per_Period'] ?></td>

function Display_single_plan(Id,Name,Period, Fee_per_period, Include_orders_per_period, Passenger_App, Passenger_App_perc, Dispatch_panel, Dispatch_panel_perc, Cash, Cash_perc, Terminal, Terminal_perc, Credit_card, Credit_card_perc, Third_party_systems_via_Dispatch, Third_party_systems_via_Dispatch_perc){
 document.getElementById("single_plan").innerHTML ="<td id='id_single_plan'>"+Id+"</td><td>"+Name+"</td><td>"+Period+"</td><td>"+Fee_per_period+"</td><td>"+Include_orders_per_period+"</td>";
    
document.getElementById("Id_js").value = Id;
//document.getElementById("Id_plan_js").value = Id;
document.getElementById("Name_js").value = Name;
document.getElementById("Period_js").value = Period;
document.getElementById("Fee_per_period_js").value = Fee_per_period; 
document.getElementById("Include_orders_per_period_js").value = Include_orders_per_period;
document.getElementById("Passenger_App_js").value = Passenger_App;
document.getElementById("Passenger_App_perc_js").value = Passenger_App_perc;
document.getElementById("Dispatch_panel_js").value = Dispatch_panel;
document.getElementById("Dispatch_panel_perc_js").value = Dispatch_panel_perc;
document.getElementById("Cash_js").value = Cash;
document.getElementById("Cash_perc_js").value = Cash_perc;
document.getElementById("Terminal_js").value = Terminal;
document.getElementById("Terminal_perc_js").value = Terminal_perc;
document.getElementById("Credit_card_js").value = Credit_card;
document.getElementById("Credit_card_perc_js").value = Credit_card_perc;
document.getElementById("Third_party_systems_via_Dispatch_js").value = Third_party_systems_via_Dispatch;
document.getElementById("Third_party_systems_via_Dispatch_perc_js").value = Third_party_systems_via_Dispatch_perc;
//document.getElementById("Get_All_Subscribed_driver").innerHTML = "<p><!--<?php echo 'One'; ?>--></p>";
}


















