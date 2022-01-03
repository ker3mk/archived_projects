<?php 
include('header.php');
include 'Phpmail/class.phpmailer.php';
echo '<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">
<h2><b>ŞİFRE TALEBİ</h2></div>
&nbsp;
<div id="content ">
<div class="block">

   <!-- Main -->
  
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
	  ';
	  if(isset($_POST['sifregonder'])&&isset($_POST['mail'])){
		if(filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)){ 
		$queryr="SELECT count(*) FROM user where user.email="."'".$_POST["mail"]."'".";";
		$resulth=mysqli_query($con,$queryr);
		$row = mysqli_fetch_array($resulth);
		if($row[0]>0){
		$queryh="SELECT * FROM user where user.email="."'".$_POST["mail"]."'".";";
	$resulth=mysqli_query($con,$queryh);
		$row = mysqli_fetch_array($resulth);
		$mymail=$row['email'];
		$sifre=$row['password'];
		$kullanici=$row['username'];
		$name=ucfirst($row['name']);
		$surname=ucfirst($row['surname']);
	$mail = new PHPMailer();

$namet = "TeknoPortal";

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->Username = "infoteknoportal@gmail.com";
$mail->Password = "tekno123456";
$mail->CharSet = 'UTF-8';
$mail->Subject    = "Tekno Portal Otomatik Bilgilendirme Maili";
$mail->AddAddress($mymail,  $name." ".$surname);
$mail->SetFrom("info@teknoportal.com", $namet);
$mail->MsgHTML("<b>Kullanıcı Adı </b>: ".$kullanici. "</br><b> Şifre</b> : ".$sifre);

if($mail->Send()) {
       
    } else {
        // bir sorun var, sorunu ekrana bastıralım
        echo $mail->ErrorInfo;
    }
	 echo '
	  <div align="center" style="margin-top:100px;" > <pre>Kullanıcı bilgileriniz mail adresinize gönderilmiştir.</pre></br>';
	  
	   header( "refresh:2;url=index.php" );
		}
	
	
	else {echo '
	  <div align="center" style="margin-top:100px;" > <pre>Girilen Mail Kayıtlı Değildir.</pre></br>';
	   header( "refresh:2;url=forgotpassword.php" );
	  }



		
		
		}
		
		
		
		
	 
	  else {echo '<div align="center" style="margin-top:100px;" > <pre>Girdiğiniz Mail adresi yanlıştır. Tekrar deneyiniz.</pre></br>';
	    header( "refresh:1;url=forgotpassword.php" );
	  
		}}
	  else{
 
      echo '<div id="content"></div>  
	  <form method="post"  action="'.$_SERVER['PHP_SELF'].'">
	  <div align="center" style="margin-top:100px;" > <pre>Mail adresinizi giriniz  <input type="text" name="mail"></br>
	  <input type="submit" name="sifregonder" value="Gönder" > </pre></div></div>



 
	  </form>
';}

	  echo'
</div>
<!-- / Main -->
</div>
<!-- / Page -->
<div align=center>Ceng310 </div></body>
</html>';

      
  
  

?>