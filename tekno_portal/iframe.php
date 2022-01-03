<?php 
include('header.php');
   echo '
   <div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">
<h2><b>DİGER HABERLER</h2><br>';
if(isset($_GET['hbr'])){
	  echo "<iframe src="."'".$_GET['hbr']."'"." width=\"100%\" height=\"100%\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"no\"></iframe>";
	
	  }
 
   echo'</div><!-- Main -->
   
      <div class="cl">&nbsp;</div>
      <!-- Content -->
	  ';
	 
	
	  echo'

<!-- / Main -->
</div>
<!-- / Page -->
<div align=center>Diğer Haberler</div></body>
</html>';

      
  
  

?>