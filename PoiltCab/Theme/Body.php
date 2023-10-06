  <header class="Header">
<!--       <img class="img-bg" src="../../img/bg.png" />-->

      <div class="Contact">
         
      <ul>
          <?php for($i=0; $i<count(Get_Contact_Number_All()); $i++){?>
          
        
<!--          Get Email - company number- Address-->
          <li></li>
          <?php } ?>
          </ul>
      
      </div>
       
    <div class="title">
<img src="<?php echo $path[$pathStyleOfPage-2]; ?>img/logo.png" />
      <!--<h1>LAZURD</h1>-->
    </div>
      
     
       </header>
<div class="clearfix"></div>   
<div class="menus">                       
<?php include($path[$pathStyleOfPage-2].'Theme/Menu.php'); ?>
      
 </div> 

<?php 
$content_name = $_GET['Action'];



content($content_name);

?>


</body>