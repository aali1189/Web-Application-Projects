

<h2>

قسم الاعطال 

</h2>

<div class="">
<h3>صنف العطل </h3>
<form class="" method="post"> 

<input class="form-control" type="text" id="Name" name="Name" placeholder="صنف العطل"/>

<input class="form-control" type="text" id="Des" name="Des" placeholder="الوصف"/>

<input type="submit" class="btn btn-primary"  value="أضافة" />
</form>

</div>

<?php

$Name = $_POST["Name"];
$Des = $_POST["Des"];



if($_POST['Name']){
include($path[$pathStyleOfPage-2].'Lib/DBC.php');
    


$Result = mysqli_query($con, "insert into Category (Name, Des) values ('$Name', '$Des')");

if($Result === true){

header("Location:?page=Issues&Msg=True");


   
 } } ?>


<div>
<h3>نوع العطل </h3>
<form class="" method="post"> 

<select class="form-control" name="Category">
    <?php 
     if(count(Get_Category_All())>0){
         $Arr = Get_Category_All(); 
         for($i=0; $i<count($Arr); $i++){ ?>
             
    <option value="<?php echo $Arr[$i][0]; ?>"><?php echo $Arr[$i][1]; ?></option>  
             
  <?php       }
         
     }
    
    ?>
</select>
    
<input class="form-control" type="text" id="IssueName" name="IssueName" placeholder="العطل"/>

<input class="form-control" type="text" id="IssueDes" name="IssueDes" placeholder="الوصف" />

<input type="submit" class="btn btn-primary"  value="أضافة" />
</form>
</div>


<div>
 <?php if($_POST["Msg"] === "True"){ ?>
 <button type="button" class="btn btn-primary btn-lg">تم الاضافة بنجاح</button>
<?php } ?>
</div>

<?php
$Category = $_POST["Category"];
$IssueName = $_POST["IssueName"];
$IssueDes = $_POST["IssueDes"];



if($_POST['Category'] && $_POST["IssueName"] && $_POST["IssueDes"]){
include($path[$pathStyleOfPage-2].'Lib/DBC.php');
    


$Result = mysqli_query($con, "insert into Issues (CategoryID, Name, Des) values ($Category, '$IssueName', '$IssueDes')");

if($Result === true){

header("Location:?page=Issues&Msg=True");


   
 } } ?>

<div>
<?php 
    
    if(count(Get_Issues_All())>1){
    
    ?>
<table class="table">
    
    <tr>
    <td>الرقم</td>
    <td>صنف العطل</td>
    <td>اسم العطل</td>
    <td>تفاصيل</td>
    </tr>
    
    <?php 
          $Arr = Get_Issues_All();
        
        for($i=0; $i<count($Arr); $i++){ ?>
            
    <tr>
    <td><?php echo $Arr[$i][0]; ?></td>
<td><?php echo Get_Category_By_ID($Arr[$i][1])[0][1]; ?></td>
    <td><?php echo $Arr[$i][2]; ?></td>
    <td><?php echo $Arr[$i][3]; ?></td>
    </tr>   
  <?php
                                        
    }
        
   
    
    ?>
  
    </table>
<?php } ?>

</div>



