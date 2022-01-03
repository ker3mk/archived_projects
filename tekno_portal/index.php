<?php 

include('header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST")
{

  if(isset($_POST["Logout"])){
    $_SESSION['authentication']=0;
    $_SESSION['user']="";
	session_destroy();
  }
  
  if(isset($_POST["Login"])){
  

  $strSQL = "SELECT COUNT(*) FROM user WHERE username="."'".htmlspecialchars($_POST['user'])."'"." and password="."'" .htmlspecialchars($_POST['pass']). "'".";";
  $query = mysqli_query($con, $strSQL);
  $row=mysqli_fetch_array($query);
  $count=$row[0];
    if($count>0){
      $_SESSION['authentication']=1;
      $_SESSION['user']=$_POST['user'];


        $str = "SELECT id,name,surname,usertype FROM user WHERE username="."'".htmlspecialchars($_POST['user'])."'"." and password="."'" .htmlspecialchars($_POST['pass']). "'".";";
        $query = mysqli_query($con, $str);
        $row=mysqli_fetch_array($query);
		$expire=time()+60*60*24*30;
		setcookie("user", ucfirst($row[1])." ".ucfirst($row[2]), time()+3600);
         header('Location: index.php');
		 $_SESSION['admin']=$row['usertype'];
		 $_SESSION['userid']=$row['id'];
		
}
      
 
    
    else{
      header('Location: index.php');
    }
  }
}
  
  
echo'
  <!-- Main -->
  <div id="main">
    <div id="main-bot">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <div class="block">
          <div class="block-bot">
            <div class="block-cnt">
              <div id="slider">
                <div class="buttons"> <span class="prev">prev</span> <span class="next">next</span> </div>
                <div class="holder">
                  <div class="frame">&nbsp;</div>
                  <div class="content">
                    <ul>';
					$queryslider="SELECT * FROM slider ";
			$sonucslider=mysqli_query($con,$queryslider);
			while($mysatir = mysqli_fetch_array($sonucslider)){
			echo'    <li class="fragment">
                      <div class="image">
                      <img src="'.$mysatir['img'].'" alt="" /> 
					   </div>
						<div class="cnt">
						<div class="cl">&nbsp;</div>
						<div class="side-a">
						<h4>'.$mysatir['header'].'</h4>
						</div>
                    <div class="side-b">
                      <p>'.$mysatir['content'].'</p>
                    </div>
                    <div class="cl">&nbsp;</div>
                  </div>
                  </li>	';
			}
					echo '
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>';
     echo'
	  
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt"> <a href="education.php" class="view-all">Hepsi</a>
              <h3>Son Eklenen Eğitimler</h3>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
		   <div class="row-articles articles">
            <div class="cl">&nbsp;</div>';
		   
		 $queryslider1="SELECT * FROM education,educationtype where education.educationtype=educationtype.id order by education.id desc LIMIT 2; ";
			$sonucslider=mysqli_query($con,$queryslider1);
			while($myedsatir = mysqli_fetch_array($sonucslider)){
			
			 echo ' <div class="article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="education.php?number='.$myedsatir[0].'"> <img src="'.$myedsatir['img'].'" alt="" /></a> </div>
              <div class="cnt">
                <h4><a href="education.php?number='.$myedsatir[0].'"> '.$myedsatir['header'].'</a></h4>
				 <p>'. substr(($myedsatir['content']),0,280)."..".'<a href="education.php?number='.$myedsatir[0].'"> devamı </a></p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>';
			}
		
			
		$queryslider2="SELECT * FROM education,educationtype where education.educationtype=educationtype.id order by education.id desc LIMIT 2,1; ";
			$sonucslider2=mysqli_query($con,$queryslider2);
			while($myedsatir1 = mysqli_fetch_array($sonucslider2)){
         echo'<div class="article last-article">
              <div class="cl">&nbsp;</div>
              <div class="image"> <a href="education.php?number='.$myedsatir1[0].'"> <img src="'.$myedsatir1['img'].'" alt="" /></a> </div>
              <div class="cnt">
                  <h4><a href="education.php?number='.$myedsatir1[0].'"> '.$myedsatir1['header'].'</a></h4>
                 <p>'. substr(($myedsatir1['content']),0,280)."..".'<a href="education.php?number='.$myedsatir1[0].'"> devamı </a></p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>';
		 }
         

	  echo '
	     
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->
    <!--  -->
    <div id="sidebar">
     
	  
      <!-- Sign In -->';
  if ( !(isset($_SESSION['authentication']))||  $_SESSION['authentication']!=1){
        echo ' <div id="sign" class="block">
        <div class="block-bot">
          <div class="block-cnt">
            <div class="cl">&nbsp;</div>
            <div class="fieldplace">
             <div class="block-cnt">
            <div class="cl">&nbsp;</div>
              <form name="myForm"   method="post" action="'.$_SERVER['PHP_SELF'].'" onsubmit="return validateForm()">
              <div class="fieldplace">
<label for="user">Kullanıcı:&nbsp; </label> 
<input type="text" name="user" class="field" value="'.$user.'"  />
</div>
<label for="pass"><div>Şifre: </div> </label> <input type="password" class="field" value="'.$pass.'" name="pass" /></div></div>
            <input type="submit" name="Login" value="Giriş" class="button button-left"  /> 
           </form>
       
  <input type="button" onclick="location.href=\'registration.php\'"  value="Kayıt ol" class="button button-right" title="create" />
          
            <p class="center"><a href="contact.php">Yardım?</a>&nbsp;&nbsp;<a href="forgotpassword.php">Şifremi Unuttum?</a></p>
          </div>
        </div>
      </div>
      <!-- / Sign In -->';
      } else{
      
       
        echo 
        ' 
        <div id="sign" class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Kullanıcı</h3>
            </div>
          </div>
 
          
          
        <div class="block-cnt">
		
          <form  method="post" action="'.$_SERVER['PHP_SELF'].'">

             &nbsp; Merhaba '.$_COOKIE["user"].' hoşgeldiniz.';
			 if(2==$_SESSION['admin']){ echo   '<div >&nbsp;</div>&nbsp;&nbsp;<p class="left">&nbsp;&nbsp;<a href="admin.php">ADMİN</a></p></br>
			 <div >&nbsp;</div>&nbsp;&nbsp;<p class="left">&nbsp;&nbsp;<a href="profile.php">PROFİL</a></p>';}
			 else {echo  '<div >&nbsp;</div>&nbsp;&nbsp;<p class="left">&nbsp;&nbsp;<a href="profile.php">PROFİL</a></p>';}
        
           echo' <input type="submit" name="Logout" value="çıkış" class="button button-right "  /></form> <div>&nbsp;&nbsp;</div><div class="cl">&nbsp;</div>
          </div>
          </div>
          </div>
            ';
      }
	  echo'
      <!-- / Sign In -->
      
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Son Haberler</h3>
            </div>
          </div>
          <div class="image-articles articles">
            <div class="cl">&nbsp;</div>';
			$queryhaber="SELECT * FROM news,newstype  WHERE news.newstype=newstype.id order by news.id desc LIMIT 3;";
			$sonuchaber=mysqli_query($con,$queryhaber);
			
				while($satir = mysqli_fetch_array($sonuchaber)){
				
					echo '<div class="article">
						  <div class="cl">&nbsp;</div>
						  <div class="image"> <a href="news.php?number='.$satir[0].'">
						  <img src="'.$satir['image'].'" alt="" /></a> </div>
						  <div class="cnt">
						  <h4><a href="news.php?number='.$satir[0].'">'.$satir['header'].'</a></h4>
                <p>'. substr(($satir['content']),0,80)."..".'<a href="news.php?number='.$satir[0].'"> devamı </a></p>
              </div>
              <div class="cl">&nbsp;</div>
            </div>';
			
			}
      
         echo'
            <div class="cl">&nbsp;</div>
            <a href="news.php" class="view-all">Tüm haberler</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
      <div class="block">
        <div class="block-bot">
          <div class="head">
            <div class="head-cnt">
              <h3>Son Makaleler</h3>
            </div>
          </div>
          <div class="text-articles articles">
		  ';
		  
		  $querymakale="SELECT * FROM article order by article.id desc LIMIT 5;";
			$sonucmakale=mysqli_query($con,$querymakale);
			while($makalesatir = mysqli_fetch_array($sonucmakale)){
			echo '<div class="article">
			<h4><a href="article.php?number='.$makalesatir['id'].'">'.$makalesatir['header'].'</a></h4>
			<small class="date">'.$makalesatir['date'].'</small>
			<p>'. substr(($makalesatir['text']),0,80)."..".'<a href="article.php?number='.$makalesatir['id'].'"> devamı </a></p>
            </div>';
			
			}
		  echo'
            <div class="cl">&nbsp;</div>
            <a href="article.php" class="view-all">Tüm makaleler</a>
            <div class="cl">&nbsp;</div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Sidebar -->
    <div class="cl">&nbsp;</div>';
    include('footer.php');
	echo'
    </div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
<div align=center>Ceng310 </div></body>
</html>'; ?>
