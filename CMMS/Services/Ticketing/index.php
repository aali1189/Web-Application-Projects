<?php Allow_User(); ?>

<div class="Ticket-details">
<form class="form-inline" method="post">
<div class="group">
<input type="hidden" name="UserID" value="<?php echo $_SESSION['UserID']; ?>" />
</div>
    
    
    
<div class="group">
    <select class="form-control" name="TicketBuilding">
<option value="0">المبنى</option> 
 <?php for($i=0;$i<5;$i++){ ?>       
<option value="<?php echo $i; ?>"><?php echo $i;?></option>  
  <?php } ?>      
</select>
<select class="form-control" name="TicketFloor">
<option value="0">الطابق</option>    
<?php for($i=0;$i<5;$i++){ ?>       
<option value="<?php echo $i; ?>"><?php echo $i;?></option>  
  <?php } ?>       
</select>  
<select class="form-control" name="TicketDepartment">
<option value="0">القسم</option>    
<?php for($i=0;$i<5;$i++){ ?>       
<option value="<?php echo $i; ?>"><?php echo $i;?></option>  
  <?php } ?>       
</select>
<select class="form-control" name="TicketRoom">
<option value="0">الغرفة</option>    
<?php for($i=0;$i<5;$i++){ ?>       
<option value="<?php echo $i; ?>"><?php echo $i;?></option>  
  <?php } ?>      
</select>
</div>

    
<div class="group">
    <select class="form-control" name="TicketIssueCategory">
<option value="0">صنف العطل</option>  
        
<?php if(count(Get_Category_All())>0){ 
        $Category = Get_Category_All();
        for($i=0; $i<count($Category); $i++){ ?>   
        
<option  value="<?php echo $Category[$i][0]; ?>"><?php echo $Category[$i][1]; ?></option> 
        <?php }} ?>
</select>
  
<select class="form-control" name="TicketIssue">
<option value="0">نوع العطل</option> 
<?php 
    
    echo '<script>document.write(2)</script>';
    if(count(Get_Issues_All())>0){ 
        $Issues = Get_Issues_All();
        for($i=0; $i<count($Issues); $i++){ ?>   
        
        <option value="<?php echo $Issues[$i][0]; ?>"><?php echo $Issues[$i][2]; ?></option> 
        <?php }} ?>  
</select>

<div class="checkbox">
<label> طبيعي</label>
<input type="checkbox" id="TicketIssueNormal" name="TicketStatusIssue" value="طبيعي" />
<label> منخفض</label>
<input type="checkbox" id="TicketIssueMid" name="TicketStatusIssue" value="منخفض"/>
<label> سيىء</label>
<input type="checkbox" id="TicketIssueBad" name="TicketStatusIssue" value="سيىء" />
    </div>

    </div>

<div class="group">
    <label> الوصف</label>
<input class="form-control" type="text" id="TicketDetail" name="TicketDetail" />
    </div>

<input class="btn btn-primary" type="submit" value="فتح بلاغ" /> 

</form>

</div>


<?php 

$UserID = $_POST['UserID'];
$TicketBuilding = $_POST['TicketBuilding'];
$TicketFloor = $_POST['TicketFloor'];
$TicketDepartment = $_POST['TicketDepartment'];
$TicketRoom = $_POST['TicketRoom'];
$TicketIssueCategory = $_POST['TicketIssueCategory'];
$TicketIssue = $_POST['TicketIssue'];
$TicketDetail = $_POST['TicketDetail'];
$TicketStatusIssue = $_POST['TicketStatusIssue'];
$TicketDate = date('l jS \of F Y h:i:s A');

if($_POST['UserID']){
include($path[$pathStyleOfPage-2].'Lib/DBC.php');
    


$Result = mysqli_query($con, "insert into Tickets (Category_ID, Issue_ID, User_ID, Dept_ID, Building, Floor, Room, Status, Details, Date, Close, Date_close) values ($TicketIssueCategory, $TicketIssue, $UserID, $TicketDepartment, $TicketBuilding, $TicketFloor, $TicketRoom, '$TicketStatusIssue', '$TicketDetail', '$TicketDate', 'false', 'null')");

if($Result === true){?>

<script> window.location.href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/CMMS/?Ticket=Open";  </script>

   

 <?php } } ?>
