<?php 

include('header.php');

include 'Phpmail/class.phpmailer.php';


  
echo'<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">

<h2>İLETİŞİM</h2></div>
&nbsp;&nbsp;&nbsp;

<div id="content ">
<div class="block">
';

if(isset($_POST['button'])){
if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)&&isset($_POST["email"])&&isset($_POST["ad_soyad"])&&isset($_POST["mesaj"])&&isset($_POST["tel"])){

$mymail=$_POST["email"];
$adsoyad=$_POST["ad_soyad"];
$mesaj=$_POST["mesaj"];
$tel=$_POST["tel"];
		
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
$mail->Subject    = "Contact Mail";
$mail->AddAddress($mymail,  $adsoyad);
$mail->AddAddress("infoteknoportal@gmail.com",  "Tekno Portal Contact");
$mail->SetFrom("info@teknoportal.com", $namet);
$mail->MsgHTML("<b>".$mesaj."</b>");

if($mail->Send()) {
       echo' <div align="center" style="margin-top:100px;" > <pre>Mesajınız  adresinize ve siteye gönderilmiştir.</pre></br></div>';
	  
	   header( "refresh:2;url=index.php" );
    }
	else {
        echo ' <div align="center" style="margin-top:100px;" > <pre>Kullanıcı bilgilerinizde hata vardır.</pre></br></div>';
	  
	   header( "refresh:2;url=contact.php" );
        echo $mail->ErrorInfo;
    }
}
else{ echo ' <div align="center" style="margin-top:100px;" > <pre>Kullanıcı bilgilerinizde hata vardır.</pre></br></div>';
	  
	   header( "refresh:2;url=contact.php" );}

	}
echo'
<div class="kerem ">

&nbsp;
<h3>İletişim</h3>
&nbsp;&nbsp;&nbsp;
<pre>
<form name="iletisim" method="POST" action="'.$_SERVER['PHP_SELF'].'">
<br>
Ad Soyad:  <input type="text" name="ad_soyad" size="25"><br />
<br>
Telefon:   <input type="text" name="tel" size="25"><br />
<br>
E-Mail:    <input type="text" name="email"  size="25"><br />
<br>
Mesajiniz: <textarea rows="5" name="mesaj"  cols="25"></textarea><br />
<div class=" block-cnt">
                     <input type="submit" name="button" value="Gonder">

 </div>
 </form>
</pre>




</div>
</div>
        <div class="block-bot">
       	
           </div>
       </div>
        

            
    
 <div id="main-bot">
         


    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>
    <!-- Footer -->
    ';include('footer.php');
	echo'
	 </div>
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
<div align=center>Ceng310 </div></body>
</html>'; ?>
