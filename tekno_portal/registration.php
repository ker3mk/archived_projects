<?php 

include('header.php');



// define variables and set to empty values
$usernameErr = $emailErr = $nameErr = $surnameErr = $passwordErr =$password1Err ="";
$name = $email = $username = $surname = $password = $password1 = "";
$nameb = $emailb= $usernameb = $surnameb = $passwordb = $password1b = false;
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function checkvalidpasss($str){
if(strlen($str)<11 && strlen($str)>5){
	 $a=false;
	} else{
	$a=true;
	}
	return $a;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $strSQL1 = "SELECT COUNT(*) FROM user WHERE username="."'".htmlspecialchars($_POST['username'])."'".";";
  $query1 = mysqli_query($con, $strSQL1);
  $row1=mysqli_fetch_array($query1);
  $count1=$row1[0];


 if (empty($_POST["username"])||$count1>0||!(strlen($_POST["username"])<12&&strlen($_POST["username"])>4)){
	if(!(strlen($_POST["username"])<15&&strlen($_POST["username"])>4)){
	$usernameErr = "Kullanıcı adı 4 ila 12 arasında olabilir. ";
	}
	else{
    $usernameErr = "Kullanıcı adı hatalı  ";}
	if($count1>0){
	$usernameErr = "Kullanıcı adı daha önceden mevcut. ";
	}
  } else {
	$usernameErr = "";
    $username = test_input($_POST["username"]);
	$usernameb=true;
  }

  if (empty($_POST["name"])) {
    $nameErr = " Ad hata  ";
  } else {
    $name = test_input($_POST["name"]);
    $nameb=true;
  }


  $strSQL = "SELECT COUNT(*) FROM user WHERE email="."'".htmlspecialchars($_POST['email'])."'".";";
  $query = mysqli_query($con, $strSQL);
  $row=mysqli_fetch_array($query);
  $count=$row[0];
  
  if (empty($_POST["email"])||(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) || $count>0) {
    $emailErr = "E posta adresi hata";
	if($count>0){
	$emailErr = "Bu Eposta adresi daha önceden kayıtlı.";
	}
  } else {
    $email = test_input($_POST["email"]);
    $emailb=true;
  }



   if (empty($_POST["surname"])) {
    $surnameErr = "Soyad hatalı";
  } else {
    $surname = test_input($_POST["surname"]);
     $surnameb=true;
  }	
  
	

  if (empty($_POST["password"])||(($_POST["password"]!=$_POST["password1"] || checkvalidpasss($_POST["password"]) )) ) {
	if(checkvalidpasss($_POST["password"])){
		$passwordErr = "Şifre 6 ila 10 karakter arasında olmalıdır.";
		}
	else{
		$passwordErr = "Şifre kombinasyonu hatalı yada uyuşmuyor";}
	} 
	
  else {
	$passwordErr = "";
    $password = $_POST["password"];
    $passwordb=true;
  }
  
  
  if (empty($_POST["password1"])||(($_POST["password"]!=$_POST["password1"] || checkvalidpasss($_POST["password1"]) )) ) {
	if(checkvalidpasss($_POST["password1"])){
		$password1Err = "Şifre 6 ila 10 karakter arasında olmalıdır.";
		}
	else{
		$password1Err = "Şifre kombinasyonu hatalı yada uyuşmuyor";}
	} 
	
  else {
	$password1Err = "";
    $password1 = $_POST["password1"];
    $password1b=true;
  }





  

  
}


  
echo'<div id="main">
<div class="cl">&nbsp;</div>
<div id="sort-nav">

<h2>KAYIT</h2></div>
&nbsp;&nbsp;&nbsp;

<div id="content ">
<div class="block">
';
if($nameb==true&& $emailb==true&& $usernameb==true&&$surnameb==true&&  $passwordb==true&&  $password1b==true){
	echo '<h3>  Kaydınız gerçekleşmiştir. 3 sn içinde Anasayfaya yönlendiriliyorsunuz..</h3>';
	
  $strSQL =   "INSERT INTO user (username, password, email,name,surname,usertype) VALUES ("."'".$username."',"."'".$password."',"."'".$email."',"."'".$name."',"."'".$surname."',"."1".");";
  mysqli_query($con, $strSQL);
  header( "refresh:3;url=index.php" );
  
  
}


echo'
<div class="kerem ">

&nbsp;
<h3>Yeni Üye Kaydı</h3>
&nbsp;&nbsp;&nbsp;

<pre>
<form method="post" action="'.$_SERVER['PHP_SELF'].'">

Adı:           <input type="text" name="name"><span class="error">* '.$nameErr.' </span>
<br>
Soyadı:        <input type="text" name="surname"><span class="error">* '.$surnameErr.' </span>
<br>
Kullanıcı adı: <input type="text" name="username"><span class="error">* '.$usernameErr.' </span>
<br>
Şifre:         <input type="password" name="password"><span class="error">* '.$passwordErr.' </span>
<br>
Şifre Tekrar:  <input type="password" name="password1"><span class="error">* '.$password1Err.' </span>
<br>
E-mail:        <input type="text" name="email"><span class="error">* '.$emailErr.'</span>
<br>
<div class=" block-cnt">
<input type="submit" name="submit" value="Gönder" > 

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
