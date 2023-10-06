<h2>
المستخدمين
</h2>


<div class="Body">
  <div class="content">
<h2>أضافة مستخدم جديد</h2>
<form class="form" method="post">
<input class="form-control" type="text" name="FirstName" placeholder="الاسم الاول"  />
<br />
<input class="form-control" type="text" name="LastName" placeholder="الاسم الاخير"  />
<br />
<input class="form-control" type="text" name="Email" placeholder="الايميل"  />
<br />
<input class="form-control" type="text" name="Phone" placeholder="التلفون"  />
<br />
<input class="form-control" type="text" name="Address" placeholder="العنوان"  />
<br />
<input class="form-control" type="text" name="Password" placeholder="كلمة المرور"  />
<br />

<input class="btn btn-primary" type="submit" value="أضافة" />


</form>
  </div>

  <div class="content">
    <h2>عرض جميع المستخدمين</h2>
<?php $arr = Get_Users_All(); ?>
<table style="border:1px solid #000; background-color:#ccc" class="table">
<tr style="background-color:#fff">
  <td>الرقم</td>
  <td>الاسم</td>
  <td>الايميل</td>
  <td>التلفون</td>
  <td>العنوان</td>
  <td>تعديل</td>
  <td>حذف</td>
    
</tr>

<?php
if($arr>0){
 for($i=0; $i<count($arr); $i++){?>
<tr>
  <td id="<?php echo $arr[$i][0]; ?>"><?php echo $arr[$i][0]; ?></td>
  <td id="<?php echo $arr[$i][1]; ?>"><?php echo $arr[$i][1] . " " . $arr[$i][2];; ?></td>
  
  <td id="<?php echo $arr[$i][3]; ?>"><?php echo $arr[$i][3]; ?></td>
  <td id="<?php echo $arr[$i][4]; ?>"><?php echo $arr[$i][4]; ?></td>
  <td id="<?php echo $arr[$i][5]; ?>"><?php echo $arr[$i][5]; ?></td>
    <td>
    <button class="btn btn-warning" onclick="Edit_Dialog(<?php echo $arr[$i][0];  ?>,'ID_Foregin_Currency','Edit_Foregin_Currency_Dialog')">Edit</button>
  </td>
  <td>
    <form action="<?php echo $path[$pathStyleOfPage-2] ;?>Lib/Currency/Delete_Foregin_Currency.php?ID=<?php echo $arr[$i][0]; ?>" method="post"><input class="btn btn-danger" type="submit" value="Delete" /></form>
  </td>
  
</tr>
<?php }
} ?>
</table>



  </div>
</div>


<?php include("../Theme/Footer.php"); ?>
