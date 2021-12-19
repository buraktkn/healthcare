<?php 
include("baglan.php");

?>  
<!DOCTYPE HTML>
<html>
<head>
<title>Healthcare</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</head>
<body>
<div class="header">	
  <div class="wrap"> 
	<div class="header-top">
		 <div class="logo">
			 <h1><a href="index.php">Healthcare</a></h1>
		 </div>
	    <div id="text-6" class="visible-all-devices header-text ">			
	    	<div class="textwidget">Daha sağlıklı günleriniz <br>
				için bizi arayın.<br>
				<br>
				İletişim numaramız<br>
				<h5 class="phone">0(216) 472 45 45</h5></div>
		</div>
		 <div class="clear"></div> 
	   </div>
   </div>	
</div>
      <!------ Slider ------------>
   <div class="banner">
      <div class="wrap">
		   <div class="cssmenu">
				<ul>
				   <li class="active"><a href="index.php"><span>Anasayfa</span></a></li>
				   <li><a href="kayit.php"><span>Kayıt Ol</span></a></li>
				   <li class="has-sub"><a href="giris.php"><span>Giriş Yap</span></a></li>
		           <li class="last"><a href="iletisim.php"><span>İletişim</span></a></li>
				 	<div class="clear"></div>
				 </ul>
	          </div>
	  	   <div class="slider">
	 		<div class="slider-wrapper theme-default">
	            <div id="slider" class="nivoSlider">
	                <img src="../images/banner1.jpg" alt="" />
	                
	            </div>
	             </div>
	        </div>
	    </div>
   </div>
		<!------End Slider ------------>
  <div class="main">
	 <div class="wrap">
		<div class="content-top">
			 <div class="top-box">
				<h2>Servisimizin Amacı</h2>
				<hr>
				<p>Sağlığınıza en kısa sürede ulaşmanız asıl amacımız. Bu amaç uğrunda destek olmak isteyen herkese kapımız açık.</p>
			 </div>
		 
	<div class="footer">
		<div class="wrap">
			<div class="footer-text">
				<h2>En kısa sürede iletişime geçiniz...</h2>

				<ul class="follow_icon">
					<li><a href="#" style="opacity: 1;"><img src="images/fb.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/tw.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/rss.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/g+.png" alt=""></a></li>
					<li><a href="#" style="opacity: 1;"><img src="images/pin.png" alt=""></a></li>
				</ul>
				<div class="copy">
					<p> © 2021 All rights Reserved | Design by Sıla and Burak</p>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>
