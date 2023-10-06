

<div class="row User-details">

<form>
<label> رقم </label>
<input type="text" id="UserID" name="UserID" />
<label> الاسم</label>
<input type="text" id="UserName" name="UserName" />
<label> الايميل</label>
<input type="text" id="UserEmail" name="UserEmail" />
<label> التلفون</label>
<input type="text" id="UserPhone" name="UserPhone" />
<label> التاريخ</label>
<input type="text" id="Date" name="Date" />
</form>
    
    
</div>



<div class="row Ticket-details">
<form class="form">
<label> رقم </label>
<input type="text" id="TicketID" name="TicketID" />
<label> الحالة</label>
<input type="text" id="TicketStatus" name="TicketStatus" />
<label> المبنى</label>
<input type="text" id="TicketBuilding" name="TicketBuilding" />
<label> الطابق</label>
<input type="text" id="TicketFloor" name="TicketFloor" />
<label> القسم</label>
<input type="text" id="TicketDepartment" name="TicketDepartment" />
<label> الغرفة</label>
<input type="text" id="TicketRoom" name="TicketRoom" />
<label> صنف العطل</label>
<input type="text" id="TicketCategory" name="TicketCategory" />
<label> نوع العطل</label>
<input type="text" id="TicketIssue" name="TicketIssue" />
    <label> طبيعي</label>
<input type="checkbox" id="TicketIssue" name="TicketIssueNormal" value="طبيعي" />
<label> منخفض</label>
<input type="checkbox" id="TicketIssue" name="TicketIssueMid" value="منخفض" />
<label> سيىء</label>
<input type="checkbox" id="TicketIssue" name="TicketIssueBad" value="1" />
<label> الوصف</label>
<input type="text" id="TicketDetail" name="TicketDetail" />
</form>

    

</div>



<div class="row Ticket-view">

<table class="table text-center">
    
    <tr>
    <td>رقم</td>
    <td>الحالة</td>
    <td>مدير الصيانة</td>
    <td>مشرف الصيانة</td>
    <td>معالجة المشكلة</td>
    </tr> 
  <?php 
    
  
//          $Arr[$Row][0] = $Rows['ID'];
//          $Arr[$Row][1] = $Rows['Category_ID'];
//          $Arr[$Row][2] = $Rows['Issue_ID'];
//          $Arr[$Row][3] = $Rows['User_ID'];
//          $Arr[$Row][4] = $Rows['Dept_ID'];
//          $Arr[$Row][5] = $Rows['Status'];
//          $Arr[$Row][6] = $Rows['Details'];
//          $Arr[$Row][7] = $Rows['Date'];
    
//          $Arr[$Row][8] = $Rows['Close'];
//          $Arr[$Row][9] = $Rows['Date_close'];
//          $Arr[$Row][10] = $Rows['Building'];
//          $Arr[$Row][11] = $Rows['Floor'];
//          $Arr[$Row][12] = $Rows['Room'];
    
    
//          $Arr[$Row][0] = $Rows['ID'];
//          $Arr[$Row][1] = $Rows['FName'];
//          $Arr[$Row][2] = $Rows['LName'];
//          $Arr[$Row][3] = $Rows['Email'];
//          $Arr[$Row][4] = $Rows['Phone'];
//          $Arr[$Row][5] = $Rows['Address'];
//          $Arr[$Row][6] = $Rows['Password'];
          
    
    if(count(Get_Tickets_All())>0){
       $Arr = Get_Tickets_All();
        for($i=0; $i<count($Arr);$i++){
    
    ?>
            
            
  
   <tr>
    <td><?php echo $Arr[$i][0]; ?></td>
    <td><?php if($Arr[$i][8] === 'false'){ echo "مفتوح"; }else {echo "مغلق";} ?></td>
    <td><span>عرض </span><input type="checkbox" id="Manager_View" onclick="View('<?php echo $Arr[$i][3]; ?>', '<?php echo Get_Users_By_ID($Arr[$i][3])[0][1] . ' ' .Get_Users_By_ID($Arr[$i][3])[0][2] ; ?>', '<?php echo Get_Users_By_ID($Arr[$i][3])[0][3]; ?>', '<?php echo Get_Users_By_ID($Arr[$i][3])[0][4]; ?>', '<?php echo $Arr[$i][7]; ?>', '<?php echo $Arr[$i][0]; ?>' ,'<?php echo $Arr[$i][8]; ?>', '<?php echo $Arr[$i][10]; ?>','<?php echo $Arr[$i][11]; ?>','<?php echo $Arr[$i][4]; ?>','<?php echo $Arr[$i][12]; ?>', '<?php echo $Arr[$i][1]; ?>','<?php echo $Arr[$i][2]; ?>','<?php echo $Arr[$i][8]; ?>', '<?php echo $Arr[$i][6]; ?>')" /></td>
    <td><span>عرض </span><input type="checkbox"  /></td>
    <td><span>عرض </span><input type="checkbox"  /></td>
    </tr>  
    
    <script>
    
    function View(Id, Name, Email, Phone, Date, TicketID, TicketStatus, TicketBuilding, TicketFloor, TicketDept, TicketRoom, TicketCategory, TicketIssue, TicketIssueStatus, TicketDetails){
//        Users Detatils
        document.getElementById('UserID').value = Id;
        document.getElementById('UserName').value = Name;
        document.getElementById('UserEmail').value = Email;
        document.getElementById('UserPhone').value = Phone;
        
        document.getElementById('Date').value = Date;
        document.getElementById('TicketID').value = TicketID;
        document.getElementById('TicketStatus').value = TicketStatus;
        document.getElementById('TicketBuilding').value = TicketBuilding;
        document.getElementById('TicketFloor').value = TicketFloor;
        document.getElementById('TicketDepartment').value = TicketDept;
        document.getElementById('TicketRoom').value = TicketRoom;
        document.getElementById('TicketCategory').value = TicketCategory;
        document.getElementById('TicketIssue').value = TicketIssueStatus;
        document.getElementById('TicketDetail').value = TicketDetails;
        
    
    }
        
    
    </script>
    
   <?php  
    
    }
        
    }
    
    ?>  
</table>
</div>