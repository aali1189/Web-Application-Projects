

<h2>

قسم الصيانة 

</h2>

<form class="" method="post"> 

<input class="form-control" type="text" id="DeptName" name="DeptName" placeholder="أسم القسم"/>

<input class="form-control" type="text" id="DeptSection" name="DeptSection" placeholder="توع القسم"/>

<input class="form-control" type="text" id="DeptDes" name="DeptDes" placeholder="الوصف" />

<input type="submit" class="btn btn-primary"  value="أضافة" />
</form>

<div>
 <?php if($_POST["Msg"] === "True"){ ?>
 <button type="button" class="btn btn-success">تم الاضافة بنجاح</button>
<?php } ?>
</div>

<?php

$DeptName = $_POST["DeptName"];
$DeptSection = $_POST["DeptSection"];
$DeptDes = $_POST["DeptDes"];


if($_POST['DeptName']){
include($path[$pathStyleOfPage-2].'Lib/DBC.php');
    


$Result = mysqli_query($con, "insert into Department (Name, Section, Details) values ('$DeptName', '$DeptSection', '$DeptDes')");

if($Result === true){

header("Location:?page=Department&Msg=True");


   
 } } ?>

<div>
    
<table class="table">
    
    <tr>
    <td>الرقم</td>
    <td>اسم القسم</td>
    <td>نوع القسم</td>
    <td>تفاصيل</td>
    </tr>
    
    <?php 
    if(count(Get_Department_All())>0){
        $Arr = Get_Department_All();
        
        for($i=0; $i<count($Arr); $i++){?>
            
    <tr>
    <td><?php echo $Arr[$i][0]; ?></td>
    <td><?php echo $Arr[$i][1]; ?></td>
    <td><?php echo $Arr[$i][2]; ?></td>
    <td><?php echo $Arr[$i][3]; ?></td>
    </tr>   
  <?php      }
    }
    
    ?>
  
    </table>


</div>



