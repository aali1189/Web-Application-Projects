<script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/jquery.js"></script>
<script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/Convert.js"></script>
<script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/bootstrap.js"></script>
<script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/airport_search.js"></script>
<script src="<?php echo $path[$pathStyleOfPage-2]; ?>Style/js/main.js"></script>

<section class="Footer">
    
    <ul>
    <li>
        <p>Copyright©<?php $year = getdate(date("U")); echo $year[year]; echo "   ". Get_Profile_All()[0][1];  ?></p>
        </li>
    </ul>
</section>

</html>
