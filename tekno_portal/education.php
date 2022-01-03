<?php 

include('header.php');



  
echo'<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">

<h2><b>EĞİTİM</h2></div>
&nbsp;

';




echo'
<div id="content ">
<div class="block">

';

if(isset($_GET['number'])){

$sayi=$_GET['number'];


$query3="SELECT COUNT(*) FROM education where education.id=".$sayi.";";
  $query4 = mysqli_query($con, $query3);
  $row4=mysqli_fetch_array($query4);
  $counter=$row4[0];
  if($counter>0){
  
$query2="SELECT * FROM education,educationtype where education.educationtype=educationtype.id and education.id=".$sayi.";";
	$result2=mysqli_query($con,$query2);
		while($row = mysqli_fetch_array($result2)){
			echo'<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'.$row['header'].'</h3>&nbsp;<hr>&nbsp;</div>

<div align="center"  > <img src="'.$row['educationimage'].'" alt="" /> </div></br>
<div style="margin-left:50px;margin-right:50px;margin-top:10px;">'.$row['content'].'</br></br>
<div align="center"  >'.$row['educationmedia'].'</div>
&nbsp;</div><hr>&nbsp;
<div>&nbsp;&nbsp;Eğitim Türü: '.$row['name'].'</div>
&nbsp;&nbsp;
</div>
&nbsp;';
}

  }
  else{ echo "<div align=\"center\" >Ulaşmaya çalıştığınız öğe mevcut değildir. Anasayfaya yönlendiriliyorsunuz.</div>"; header( "refresh:3;url=index.php" );}}
  




else{
/*

if(isset($_POST['silinecekdeger'])&&isset($_POST['sil'])){
	$mysil="Delete from education where education.id=".$_POST['silinecekdeger'].";";
	mysqli_query($con,$mysil);
	if(isset($_POST['silinecekdegerresim'])){
		unlink($_POST['silinecekdegerresim']);
	}

}

$query2="SELECT * FROM education,educationtype where education.educationtype=educationtype.id order by education.id desc;";
	$result2=mysqli_query($con,$query2);
		while($row = mysqli_fetch_array($result2)){
		$myid=$row[0];
		//echo $myid;
			echo'<div  class="newsdiv" >
<div class="newh" style="margin-top:10px; margin-left:100px;"  >
<a href="education.php?number='.$myid.'"> <h3>'.$row['header'].'</h3></a>
Eğitim Türü: '.$row['name'].'&nbsp;&nbsp;
</br>
Tarih: '.$row['date'].'&nbsp;&nbsp;';
if(isset($_SESSION['admin'])&& $_SESSION['admin']==2){
echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<input type="hidden" name="silinecekdeger" value="'.$myid.'">
<input type="hidden" name="silinecekdegerresim" value="'.$row['educationimage'].'">
<input type="submit" name="sil" value="Sil" > 
</form>';
}
echo'
</div>
&nbsp;&nbsp;
</div>
&nbsp;';
			
}}*/


if(isset($_POST['silinecekdeger'])&&isset($_POST['sil'])){
	$mysil="Delete from education where education.id=".$_POST['silinecekdeger'].";";
	mysqli_query($con,$mysil);
	if(isset($_POST['silinecekdegerresim'])){
		unlink($_POST['silinecekdegerresim']);
	}

}
	$qw="SELECT count(*) FROM education ;";
	$roe=mysqli_query($con,$qw) or die(mysql_error());
	$rot=mysqli_fetch_array($roe);
    $total=$rot[0];

	$dis=4;
	$total_page=ceil($total/$dis);
	$page_cur=(isset($_GET['page']))?$_GET['page']:1;
	$k=($page_cur-1)*$dis;
 
	$q="SELECT * FROM education,educationtype where education.educationtype=educationtype.id order by education.id desc limit $k,$dis";
	$ros=mysqli_query($con,$q);
	while($row=mysqli_fetch_array($ros))
	{$myid=$row[0];
		//echo $myid;
			echo'<div  class="newsdiv" >
<div class="newh" style="margin-top:10px; margin-left:100px;"  >
<a href="education.php?number='.$myid.'"> <h3>'.$row['header'].'</h3></a>
Eğitim Türü: '.$row['name'].'&nbsp;&nbsp;
</br>
Tarih: '.$row['date'].'&nbsp;&nbsp;';

if(isset($_SESSION['admin'])&& $_SESSION['admin']==2){
echo '
<form method="post" action="'.$_SERVER['PHP_SELF'].'">
<input type="hidden" name="silinecekdeger" value="'.$myid.'">
<input type="hidden" name="silinecekdegerresim" value="'.$row['educationimage'].'">
<input type="submit" name="sil" value="Sil" > 
</form>';
}
echo'
</div>
&nbsp;&nbsp;
</div>
&nbsp;';
	}
	
	echo '<br/><div align="center" >';
	if($page_cur>1)
	{
		echo '<a href="article.php?page='.($page_cur-1).'" style="cursor:pointer;color:#7ab7e2;" ><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:120px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" Geri "></a>';
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
		echo '<a href="article.php?page='.$i.'"> <input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:30px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value="'.$i.'"> </a>';
		}
	}
	if($page_cur<$total_page)
	{
		echo '<a href="article.php?page='.($page_cur+1).'"><input style="cursor:pointer;background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:white;font-size:15px;font-weight:bold;" type="button" value=" İleri "></a>';
	}
	else
	{
	 echo '<input style="background-color:#7ab7e2;border:1px black solid;border-radius:5px;width:90px;height:30px;color:black;font-size:15px;font-weight:bold;" type="button" value="   İleri "></div>';
	}
 



}
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
<div align="center">Ceng310 </div></body>
</html>'
; ?>