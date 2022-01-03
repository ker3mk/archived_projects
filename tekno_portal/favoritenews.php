<?php 

include('header.php');

function Helper($con,$qw){


	$roe=mysqli_query($con,$qw) or die(mysql_error());
	$rot=mysqli_fetch_array($roe);
    $total=$rot[0];

	$dis=4;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
 
	$q="SELECT * FROM news,newstype,favoritenews where news.newstype=newstype.id and favoritenews.userid="."'".$_SESSION['userid']."'"." and favoritenews.newsid=news.id  order by news.id desc limit $k,$dis";
	$ros=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($ros))
	{$myid=$row[0];
		echo'<div  class="newsdiv" >
<div class="newh" style="margin-top:10px; margin-left:100px;"  >
<a href="news.php?number='.$myid.'"> <h3>'.$row['header'].'</h3></a>
Haber Türü: '.$row['name'].'&nbsp;&nbsp;
</br>
Tarih: '.$row['date'].'&nbsp;&nbsp;';
if(isset($_SESSION['admin'])){
if($_SESSION['admin']==1){
echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<input type="hidden" name="silinecekdeger" value="'.$myid.'">
<input type="submit" name="sil" value="Favorimden Sil" > 
</form>';}

}
echo'
</div>
&nbsp;&nbsp;
</div>
&nbsp;';}
	
	
	echo '<br/><div align="center" >';
	if($page_cur>1)
	{
		echo '<a href="news.php?page='.($page_cur-1).'" style="cursor:pointer;color:#7ab7e2;" ><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Geri "></a>';
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
		echo '<a href="news.php?page='.$i.'"> <input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a>';
		}
	}
	if($page_cur<$total_page)
	{
		echo '<a href="news.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" İleri "></a>';
	}
	else
	{
	 echo '<input style="background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   İleri "></div>';
	}}
  
echo'<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">

<h2><b>FAVORİDEKİ HABERLER</h2></div>
&nbsp;

';




echo'
<div id="content ">
<div class="block">

';




if(isset($_POST['silinecekdeger'])&&isset($_POST['sil'])){

$favsil="delete from  favoritenews where favoritenews.userid ="."'".$_SESSION['userid']."'"." and favoritenews.newsid="."'".$_POST['silinecekdeger']."'".";";
	mysqli_query($con,$favsil);


}
if(isset($_SESSION['userid'])){
$qw="SELECT count(*) FROM favoritenews where favoritenews.userid="."'".$_SESSION['userid']."'".";";

//$qw="SELECT count(*) FROM news ;";
	Helper($con,$qw);}

echo '



</div>
        <div class="block-bot">
       	
           </div>
       </div>
        

            
    
 <div id="main-bot">
         


    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
    <!-- Footer -->
    ';
	
include('footer.php');
	echo'
	 </div>
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
<div align="center">Ceng310</div></body>
</html>'
; ?>