<?php 
include('header.php');
function checkvalidpasss($str){
if(strlen($str)<11 && strlen($str)>5){
	 $a=true;
	} else{
	$a=false;
	}
	return $a;
}

   echo '
   <div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">
<h2><b>PROFİL</h2></div>

   <!-- Main -->
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
	  ';
if(isset($_SESSION['authentication'])){
  if($_SESSION['authentication']==1&&($_SESSION['admin']==1||$_SESSION['admin']==2)){
  echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="favoritenews.php">Favori Haberleri Görüntüle</a></h3>&nbsp;</div>
';
  echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="profile.php?number=1">Şifre Değiştir</a></h3>&nbsp;</div>
';
  echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="profile.php?number=2">Not Ekle</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="notes.php">Notları Görüntüle</a></h3>&nbsp;</div>
';
if(isset($_POST['sifregonder'])){

if(isset($_POST['pass'])&&checkvalidpasss($_POST['pass'])){

 $strSQLi =    " UPDATE user SET password="."'".$_POST['pass']."'"." where user.id="."'".$_SESSION['userid']."'"."; ";
 
  mysqli_query($con, $strSQLi);


}
else{ echo'<div class="newh"style="margin-top:10px;" align="center" ><hr><h3>'."Sorun Oluştu".'</h3>&nbsp;<hr>&nbsp;</div>';



}

}
if(isset($_POST['notegonder'])){
if(isset($_POST['note'])){
$ab=mysql_real_escape_string($_POST['note']);
  $strSQLnote ="insert into notes (note, userid) VALUES ("."'".$ab."',"."'".$_SESSION['userid']."'".");";
		mysqli_query($con, $strSQLnote);
}
}

  
  
  if(isset($_GET['number'])){
  if($_GET['number']==1){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Şifre Değiştir".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" action="'.$_SERVER['PHP_SELF'].'">

Şifre Giriniz:    <input type="password" name="pass">
<br>


<div class=" block-cnt">
<input type="submit" name="sifregonder" value="Gönder" > 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}

else if($_GET['number']==2){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Not Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">';

echo '
<pre>
  Not:    <textarea rows="6"  cols="50" name="note"></textarea>
<br>
<input type="submit" name="notegonder" value="Gönder" > 


 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';	
}

  
  
  }
      
	  
	  
	  
	  
	  
	  
	  
	  }}
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