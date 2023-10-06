<?php 

// echo "User id : " . $_SESSION['ID'] . "<br />";
// echo "User type : " . $_SESSION['Seller'] . "<br />";
// echo "User name : " . Get_User_By_Id($_SESSION['ID'])[0][1] . " " . Get_User_By_Id($_SESSION['ID'])[0][2];


?>
<div class="col-lg-3 col-md-3 Menu">
  <ul>
    <li><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/">Dashboard</a></li>
    <li><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Menus/">Menus</a></li>
    <li><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Profile/">Profile</a></li>
    <li style="<?php echo Seller(Get_Exchange_Seller_By_Id($_SESSION['ID'])); ?>"><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Seller/">Seller</a></li>
    <li style="<?php echo Seller(Get_Exchange_Seller_By_Id($_SESSION['ID'])); ?>"><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Currency/">Currency</a></li>
    <li style="<?php echo Seller(Get_Exchange_Seller_By_Id($_SESSION['ID'])); ?>"><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Alias/">Alias</a></li>
    <li><a href="<?php echo $path[$pathStyleOfPage-1]; ?>Dashboard/Users/">Users</a></li>

  </ul>
</div>
