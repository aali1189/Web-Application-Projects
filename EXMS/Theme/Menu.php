<?php
//$Arr =  Get_Menus_All('Title');
?>
<nav class="navbar navbar-default">
<div class="Container-fluid">
  <div class="navbar-header">
    <ul class="nav nav-tabs">
    <li>
      <a class="navbar-brand" href="<?php echo $path[$pathStyleOfPage-1];?>index.php?Name=Home&Amount=0"><i class="glyphicon glyphicon-home"></i></a>
    </li>
  </ul>
  </div>
  <ul class="nav nav-tabs">

  <?php //for($i=0; $i<count($Arr); $i++){?>
    <li role="presentation">
      <a href="<?php //echo $path[$pathStyleOfPage-1];?>index.php?Name=<?php //echo $Arr[$i][0]; ?>&Amount=1"><?php// echo $Arr[$i][0]; ?></a>
    </li>
<?php //} ?>
  </ul>
</div>
</nav>
