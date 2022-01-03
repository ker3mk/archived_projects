<?php 
error_reporting(0);
session_start();

$user="";
$pass="";
$namesurname="";

// set timeout period in seconds
$inactive = 120;
// check to see if $_SESSION['timeout'] is set
if(isset($_SESSION['timeout']) ) {
	$session_life = time() - $_SESSION['timeout'];
	if($session_life > $inactive)
        {
$_SESSION['authentication']=0; 
session_destroy();
header("Location: index.php"); }
}
$_SESSION['timeout'] = time();
$con = mysqli_connect("localhost","root","","teknoportal") or die("Some error occurred during connection " . mysqli_error($con));  
mysqli_query($con,"SET NAMES 'UTF8'");
mysqli_query($con,"SET character_set_connection = 'UTF8'");
mysqli_query($con,"SET character_set_client = 'UTF8'");
mysqli_query($con,"SET character_set_results = 'UTF8'");
echo'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teknoportal</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--[if IE 6]><link rel="stylesheet" href="css/ie6-style.css" type="text/css" media="all" /><![endif]-->
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/fns.js" type="text/javascript"></script>


</head>
<body>
<!-- Page -->
<div id="page" class="shell">
  <!-- Header -->
  <div id="header">
    <!-- Top Navigation -->
    <div id="top-nav">
      <ul>
        <li class="home"><a href="index.php">Anasayfa</a></li>
        <li><a href="http://facebook.com">Facebook</a></li>
        <li><a href="http://twitter.com">Twitter</a></li>
       
        <li class="last"><a href="http://instagram.com">Instagram</a></li>
      </ul>
    </div>
    <!-- / Top Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Logo -->
    <div id="logo">
      <h1><a href="index.php">Tekno<span>portal</span></a></h1>
      <p class="description">Teknoloji Haber Portalı</p>
    </div>
    <!-- / Logo -->
    <!-- Main Navigation -->
    <div id="main-nav">
      <div class="bg-right">
        <div class="bg-left">
          <ul>
            <li><a href="">Faydalı Linkler</a></li>
            <li><a href="iframe.php?hbr=http://www.hurriyet.com.tr/teknoloji/">Hürriyet</a></li>
            <li><a href="iframe.php?hbr=http://www.milliyet.com.tr/teknoloji/">Milliyet</a></li>
            <li><a href="iframe.php?hbr=http://www.ntvmsnbc.com/id/24927534/">Ntv</a></li>
            <li><a href="iframe.php?hbr=http://www.chip.com.tr/">Chip Online</a></li>
            <li><a href="iframe.php?hbr=http://www.ensonhaber.com/kategori/teknoloji">En Son Haber</a></li>
            <li><a href="iframe.php?hbr=http://www.biltek.tubitak.gov.tr/haberler/index.php?kategori_id=19&kategori_isim=teknoloji">Tübitak</a></li>
            <li><a href="iframe.php?hbr=http://www.mynet.com/teknoloji/">MyNet</a></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- / Main Navigation -->
    <div class="cl">&nbsp;</div>
    <!-- Sort Navigation -->
    <div id="sort-nav">
      <div class="bg-right">
        <div class="bg-left">
          <div class="cl">&nbsp;</div>
          <ul>
            <li class="first active first-active"><a href="index.php">Anasayfa</a><span class="sep">&nbsp;</span></li>
            <li><a href="news.php">Haber</a><span class="sep">&nbsp;</span></li>
            <li><a href="article.php">Makale</a><span class="sep">&nbsp;</span></li>
            <li><a href="education.php">Eğitim</a><span class="sep">&nbsp;</span></li>
            <li><a href="contact.php">İletişim</a><span class="sep">&nbsp;</span></li>
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
    </div>
    <!-- / Sort Navigation -->
  </div>
  <!-- / Header -->';