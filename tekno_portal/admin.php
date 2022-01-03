<?php 
include('header.php');

echo'<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">
<h2><b>ADMİN</h2></div>
&nbsp;
<div id="content ">
<div class="block">
';

if(isset($_SESSION['admin'])&& $_SESSION['admin']==2){
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=1">Makale Ekle</a></h3>&nbsp;</div>
';

echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=2">Haber Ekle</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=3">Eğitim Ekle</a></h3>&nbsp;</div>
';

echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=4">Slider Ekle</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=8">Slider Sil</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=5">Kullanıcı Yetki Değiştir</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=6">Eğitim Tür Ekle</a></h3>&nbsp;</div>
';
echo '<div class="newh"style="margin-top:10px;" align="center" ><h3><a href="admin.php?number=7">Haber Tür Ekle</a></h3>&nbsp;</div>
';
if(isset($_POST['makale-gonder'])){
$baslikm=$_POST['baslik'];
$yazar=$_POST['yazar'];
$icerikm= $_POST['icerik'];
$datetime = date_create()->format('Y-m-d H:i:s');
if(isset($_POST['baslik'])&&isset($_POST['yazar'])&&isset($_POST['icerik'])){

 $strSQLi =   "insert into article (header, text, writer,date) VALUES ("."'".$baslikm."',"."'".$icerikm."',"."'".$yazar."',"."'".$datetime."'".");";
 
  mysqli_query($con, $strSQLi);

}

}
if(isset($_POST['haber-gonder'])){
if(isset($_POST['haber-baslik'])&& isset($_POST['haber-icerik'])){
$baslikh=$_POST['haber-baslik'];
$turh=$_POST['haber-turu'];
$icerikh= $_POST['haber-icerik'];
$datetime = date_create()->format('Y-m-d H:i:s');
if($_FILES['imghaber']['name']!="")
{
    $uploaddir = 'css/images/news'; // upload edilecek klasör 
    $img = getimagesize($_FILES['imghaber']['tmp_name']); // resmin boyutları ve türü için kullanılıyor manuale detayı için bakabilirsin 
    $ext = explode('/', $img['mime']); // resmin uzantısını alıyoruz jpg, png, gif... 
    $new_name = time() . mt_rand(10000, 99999); // rastgele bir isim yaratıyoruz. yoksa aynı isimli dosya üstüne yazılabilir 
    $uploadfile = $new_name . '.' . $ext[1]; // yeni dosya ismi uzantısıyla birlikte 

    // resmi geçici klasöründen yüklemek istediğimiz yere taşıyoruz. 
    if(move_uploaded_file($_FILES['imghaber']['tmp_name'], $uploaddir . '/' . $uploadfile)) 
    { 
        $strSQLe =   "insert into news (header, content, newstype,newsimage,date) VALUES ("."'".$baslikh."',"."'".$icerikh."',"."'".$turh."',"."'".$uploaddir . '/' . $uploadfile."',"."'".$datetime."'".");";
		mysqli_query($con, $strSQLe);
		
    } 
}
else{ 
 $strSQLe =   "insert into news (header, content, newstype,date) VALUES ("."'".$baslikh."',"."'".$icerikh."',"."'".$turh."',"."'".$datetime."'".");";
  mysqli_query($con, $strSQLe);
  
}
}
else {echo 'Girilen veriler eksik yada hatalıdır.';}

}
if(isset($_POST['egitim-gonder'])){

$baslik=$_POST['egitim-baslik'];
$tur=$_POST['egitim-turu'];
$icerik= $_POST['egitim-icerik'];
$medya=$_POST['egitim-medya'];
$datetime = date_create()->format('Y-m-d H:i:s');
if($_FILES['imgegitim']['name']!="") 
{
    $uploaddir = 'css/images/education'; // upload edilecek klasör 
    $img = getimagesize($_FILES['imgegitim']['tmp_name']); // resmin boyutları ve türü için kullanılıyor manuale detayı için bakabilirsin 
    $ext = explode('/', $img['mime']); // resmin uzantısını alıyoruz jpg, png, gif... 
    $new_name = time() . mt_rand(10000, 99999); // rastgele bir isim yaratıyoruz. yoksa aynı isimli dosya üstüne yazılabilir 
    $uploadfile = $new_name . '.' . $ext[1]; // yeni dosya ismi uzantısıyla birlikte 

    // resmi geçici klasöründen yüklemek istediğimiz yere taşıyoruz. 
    if(move_uploaded_file($_FILES['imgegitim']['tmp_name'], $uploaddir . '/' . $uploadfile)) 
    { 
      $strSQLr ="insert into education (header, content, educationtype,educationimage,educationmedia,date) VALUES ("."'".$baslik."',"."'".$icerik."',"."'".$tur."',"."'".$uploaddir . '/' . $uploadfile."',"."'".$medya."',"."'".$datetime."'".");";
		mysqli_query($con, $strSQLr);
		
    } 
}
else{
		$strSQLr =   "insert into education (header, content, educationtype,educationmedia,date) VALUES ("."'".$baslik."',"."'".$icerik."',"."'".$tur."',"."'".$medya."',"."'".$datetime."'".");";
		mysqli_query($con, $strSQLr);
		
  }


}
if(isset($_POST['slider-gonder'])){
$basliks=$_POST['slider-baslik'];

$iceriks=$_POST['slider-icerik'];
if(($_FILES['imgslider']['name']!="") && isset($_POST['slider-baslik'])&& isset($_POST['slider-icerik'])){
$uploaddir = 'css/images/slider'; // upload edilecek klasör 
    $img = getimagesize($_FILES['imgslider']['tmp_name']); // resmin boyutları ve türü için kullanılıyor manuale detayı için bakabilirsin
	
	if($img[0]==638 && $img[1]==287){
	
	
	
    $ext = explode('/', $img['mime']); // resmin uzantısını alıyoruz jpg, png, gif... 
    $new_name = time() . mt_rand(10000, 99999); // rastgele bir isim yaratıyoruz. yoksa aynı isimli dosya üstüne yazılabilir 
    $uploadfile = $new_name . '.' . $ext[1]; // yeni dosya ismi uzantısıyla birlikte 

    // resmi geçici klasöründen yüklemek istediğimiz yere taşıyoruz. 
		if(move_uploaded_file($_FILES['imgslider']['tmp_name'], $uploaddir . '/' . $uploadfile)) { 
      $strSQLs ="insert into slider (header, content, img) VALUES ("."'".$basliks."',"."'".$iceriks."',"."'".$uploaddir . '/' . $uploadfile."'".");";
		mysqli_query($con, $strSQLs);
		echo $iceriks;
    }
		else{ echo 'Problem oluştu.....';}
		
}
	else {
	echo ' Resmin boyutu uygun değildir tekrar yükleyiniz 638x287 olmalıdır.';
	} 
} 
}
if(isset($_POST['kullanici-gonder'])){

if(isset($_POST['kullaniciadi'])&&isset($_POST['kullanici-tipi'])){

 $strSQLc =   " UPDATE user SET usertype="."'".$_POST['kullanici-tipi']."'"." where username="."'".$_POST['kullaniciadi']."'"."; ";
  mysqli_query($con, $strSQLc);

}
else echo 'kullanıcı hata oluştu';
}
if(isset($_POST['egitimtur-gonder'])){
if(($_FILES['imgegitimtur']['name']!="") && isset($_POST['egitim-turuismi'])){
$uploaddir = 'css/images/egitimtur'; // upload edilecek klasör 
    $img = getimagesize($_FILES['imgegitimtur']['tmp_name']); // resmin boyutları ve türü için kullanılıyor manuale detayı için bakabilirsin
	if($img[0]==194 && $img[1]==99){
	
	
	
    $ext = explode('/', $img['mime']); // resmin uzantısını alıyoruz jpg, png, gif... 
    $new_name = time() . mt_rand(10000, 99999); // rastgele bir isim yaratıyoruz. yoksa aynı isimli dosya üstüne yazılabilir 
    $uploadfile = $new_name . '.' . $ext[1]; // yeni dosya ismi uzantısıyla birlikte 

    // resmi geçici klasöründen yüklemek istediğimiz yere taşıyoruz. 
		if(move_uploaded_file($_FILES['imgegitimtur']['tmp_name'], $uploaddir . '/' . $uploadfile)) { 
      $strSQLet ="insert into educationtype (name, img) VALUES ("."'".$_POST['egitim-turuismi']."',"."'".$uploaddir . '/' . $uploadfile."'".");";
		mysqli_query($con, $strSQLet);
    }
		else{ echo 'Problem oluştu.....';}
		
}
	else {
	echo ' Resmin boyutu uygun değildir tekrar yükleyiniz 194x99 olmalıdır.';
	} 
} 
}
if(isset($_POST['haberturgonder'])){
if(($_FILES['haberturimg']['name']!="") && isset($_POST['haberturismi'])){
$uploaddir = 'css/images'; // upload edilecek klasör 
    $img = getimagesize($_FILES['haberturimg']['tmp_name']); // resmin boyutları ve türü için kullanılıyor manuale detayı için bakabilirsin
	if($img[0]==51 && $img[1]==51){
	
	
	
    $ext = explode('/', $img['mime']); // resmin uzantısını alıyoruz jpg, png, gif... 
    $new_name = time() . mt_rand(10000, 99999); // rastgele bir isim yaratıyoruz. yoksa aynı isimli dosya üstüne yazılabilir 
    $uploadfile = $new_name . '.' . $ext[1]; // yeni dosya ismi uzantısıyla birlikte 

    // resmi geçici klasöründen yüklemek istediğimiz yere taşıyoruz. 
		if(move_uploaded_file($_FILES['haberturimg']['tmp_name'], $uploaddir . '/' . $uploadfile)) { 
      $strSQLet ="insert into newstype (name, image) VALUES ("."'".$_POST['haberturismi']."',"."'".$uploaddir . '/' . $uploadfile."'".");";
		mysqli_query($con, $strSQLet);
    }
		else{ echo 'Problem oluştu.....';}
		
}
	else {
	echo ' Resmin boyutu uygun değildir tekrar yükleyini 51x51 olmalıdır.';
	} 
} 
}
if(isset($_POST['slidersil'])){
if(isset($_POST['myslider'])){

$querysf="select * from slider where slider.id="."'".$_POST['myslider']."'".";";
	$resulth=mysqli_query($con,$querysf);
	while($row = mysqli_fetch_array($resulth)){
	unlink($row['img']);
	}
$queryss="Delete FROM slider where slider.id="."'".$_POST['myslider']."'".";";
	mysqli_query($con,$queryss);
	}
	
	else { echo 'Veri bulunamamaktadır.';}
}


if(isset($_GET['number'])){
//MAKALE EKLE
if($_GET['number']==1){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Makale Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="baslik">
<br>
Yazar:     <input type="text" name="yazar">
<br>
                                      İçerik:    <textarea rows="10"  cols="50" name="icerik"></textarea>
<br>

<div class=" block-cnt">
<input type="submit" name="makale-gonder" value="Gönder" > 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}
//HABER EKLE
else if($_GET['number']==2){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Haber Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="haber-baslik"><br>
Türü:                 <select name="haber-turu">';

$queryh="SELECT * FROM newstype ;";
	$resulth=mysqli_query($con,$queryh);
		while($row = mysqli_fetch_array($resulth)){
		
		echo ' <option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
echo '
</select>
<br>
                                      İçerik:    <textarea rows="6"  cols="50" name="haber-icerik"></textarea>
<br>
            Resim seç: <input type="file" name="imghaber" single>
 
<div class=" block-cnt">
<input type="submit" name="haber-gonder" value="Gönder" > 


 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';	
}
//EĞİTİM EKLEME
else if($_GET['number']==3){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Eğitim Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="egitim-baslik"><br>
Türü:                 <select name="egitim-turu">';

$queryh="SELECT * FROM educationtype ;";
	$resulth=mysqli_query($con,$queryh);
		while($row = mysqli_fetch_array($resulth)){
		
		echo ' <option value="'.$row['id'].'">'.$row['name'].'</option>';
		}
echo '
</select>
<br>
                                      İçerik:    <textarea rows="6"  cols="50" name="egitim-icerik"></textarea>
<br>								  
                                      Medya kodu:<textarea rows="6"  cols="50" name="egitim-medya"></textarea>
									  <br>
            Resim seç: <input type="file" name="imgegitim" single>
 
<div class=" block-cnt">
<input type="submit" name="egitim-gonder" value="Gönder" > 


 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';	
}
//SLIDER GONDER
else if($_GET['number']==4){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Slider Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="slider-baslik">
<br>

                                      İçerik:    <textarea rows="10"  cols="50" name="slider-icerik"></textarea>
<br>
            Resim seç: <input type="file" name="imgslider" single></br>
			*Slider boyutu 638x287 olmalıdır.
<div class=" block-cnt">
<input type="submit" name="slider-gonder" value="Gönder" >
 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}

else if($_GET['number']==5){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Kullanıcı Yetki Değiştir".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post"  action="'.$_SERVER['PHP_SELF'].'">

Kullanıcı:    <input type="text" name="kullaniciadi">
<br>
Kullanıcı Tipi: <select name="kullanici-tipi">
';

$queryk="SELECT * FROM usertype ;";
	$resultk=mysqli_query($con,$queryk);
		while($rowk = mysqli_fetch_array($resultk)){
		
		echo ' <option value="'.$rowk['id'].'">'.$rowk['name'].'</option>';
		}
echo'
</select>
<div class=" block-cnt">
<input type="submit" name="kullanici-gonder" value="Gönder" > 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}
else if($_GET['number']==6){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Eğitim Türü Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="egitim-turuismi">
<br>

            Resim seç: <input type="file" name="imgegitimtur" single></br>
			*İcon boyutu 194x99 olmalıdır.
<div class=" block-cnt">
<input type="submit" name="egitimtur-gonder" value="Gönder" > 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}
else if($_GET['number']==7){

echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Haber Tür Ekle".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Başlık:    <input type="text" name="haberturismi">
<br>

            Resim seç: <input type="file" name="haberturimg" single></br>
			*İcon boyutu 51x51 olmalıdır.
<div class=" block-cnt">
<input type="submit" name="haberturgonder" value="Gönder" > 

 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';
}
else if($_GET['number']==8){
echo '<div  class="newsdiv" >
<div class="newh"style="margin-top:10px;" align="center" ><h3>'."Slider Sil".'</h3>&nbsp;<hr>&nbsp;</div>

<div align=center style="margin-left:50px;margin-right:50px;margin-top:10px;"><pre>
<form method="post" enctype="multipart/form-data" action="'.$_SERVER['PHP_SELF'].'">

Slider:                 <select name="myslider">';

$queryh="SELECT * FROM slider ;";
	$resulth=mysqli_query($con,$queryh);
		while($row = mysqli_fetch_array($resulth)){
		
		echo ' <option value="'.$row['id'].'">'.$row['header'].'</option>';
		}
echo '
</select>

<div class=" block-cnt">
<input type="submit" name="slidersil" value="Gönder" > 


 </div>
 </form>
</pre>&nbsp;</div>&nbsp;

&nbsp;&nbsp;
</div>
&nbsp;';	
}

}
}

else{ echo '<div align=center <h3> Bu sayfayi goruntuleme yetkiniz yoktur...</h3></div>';
  header( "refresh:3;url=index.php" );}

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
;
 ?>