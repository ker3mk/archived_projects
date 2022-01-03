<?php 
include('header.php');
   echo '
   <div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">
<h2><b>NOTLAR</h2></div>

   <!-- Main -->
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
	  ';
	  if(isset($_SESSION['authentication'])){
	  
	  
	  
	  
  if($_SESSION['authentication']==1&&($_SESSION['admin']==1||$_SESSION['admin']==2)){
  
  if(isset($_POST['silinecekdeger'])&&isset($_POST['sil'])){
$mysil="Delete from notes where notes.id=".$_POST['silinecekdeger'].";";
	mysqli_query($con,$mysil);


}
  $qw="SELECT count(*) FROM notes where notes.userid="."'".$_SESSION['userid']."'".";";

	$roe=mysqli_query($con,$qw) or die(mysql_error());
	$rot=mysqli_fetch_array($roe);
    $total=$rot[0];

	$dis=4;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
 
	$q="SELECT * FROM notes where notes.userid="."'".$_SESSION['userid']."'"." order by notes.id desc limit $k,$dis;";

	$ros=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($ros))
	{$myid=$row[0];
		echo'<br><div  class="newsdiv" >
<div class="newh" style="margin-top:10px; margin-left:100px;"  >
<a href="notes.php"> <h3>Not</h3></a><hr></br>
<div style="background-color:#7ab7e2; color:black">
Not İçeriği: '.$row['note'].'&nbsp;&nbsp<br></div><br><hr>';
echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<input type="hidden" name="silinecekdeger" value="'.$myid.'">
<input type="submit" name="sil" value="Sil" > 
</form>';
echo'
</div>
&nbsp;&nbsp;
</div>
&nbsp;';
	}
	
	echo '<br/><div align="center" >';
	if($page_cur>1)
	{
		echo '<a href="notes.php?page='.($page_cur-1).'" style="cursor:pointer;color:#7ab7e2;" ><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Geri "></a>';
	}
	else
	{
	  echo '<input style="background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:120px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value=" Geri ">';
	}
	for($i=1;$i<=$total_page;$i++)
	{
		if($page_cur==$i)
		{
			echo ' <input style="background-color:#7ab7e2;border:2px black solid;border-radius:5px;width:30px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> ';
		}
		else
		{
		echo '<a href="notes.php?page='.$i.'"> <input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a>';
		}
	}
	if($page_cur<$total_page)
	{
		echo '<a href="notes.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" İleri "></a>';
	}
	else
	{
	 echo '<input style="background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   İleri "></div>';
	}
}

	  
	}
else{ echo '<div align="center" style="margin-top:100px;" > <pre>Görüntüleme Yetkiniz Bulunmamaktadır. Lütfen Giriş Yapınız.</pre></br></div>';
	   header( "refresh:2;url=index.php" );}
	  echo'
</div>
<!-- / Main -->
</div>
<!-- / Page -->
<div align=center>Ceng310 </div></body>
</html>';

      
  
  

?>