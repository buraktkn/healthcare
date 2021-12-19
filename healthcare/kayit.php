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
</head>
<body>
<div class="header">	
  <div class="wrap"> 
	<div class="header-top">
		 <div class="logo">
			 <h1><a href="index.php">Healthcare</a></h1>
		 </div>
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
   <div class="about-banner">
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
	  </div>
   </div>
		<!------End Slider ------------>
  <div class="main">
	 <div class="wrap">
		<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Kayıt Formu</h3>
					    <form id="signUpForm" method="post" action="yenikayit.php">
					    	<div>
						    	<span><label>İsim</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Soyisim</label></span>
						    	<span><input name="userLastname" type="text" class="textbox"></span>
						    </div>
							 <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Şifre</label></span>
						    	<span><input name="password" type="text" class="textbox"></span>
						    </div>
						   
						 
							
						    <div>
						   <!--- 	<span><label>Hasta mısınız? Donör mü?</label></span>
						    	<span><input name="kutu" type="radio"value="Hasta">Hasta</span>
								<span><input name="kutu" type="radio"value="Donör">Donör</span>--->
								
								<select class="custom-select" name="customSelect">
								<option value="Hasta">Hasta</option>
								<option value="Donor">Donör</option>
								</select>																								

						    </div>
						   <div>
								<button id="signUpReal">Sign Up</button>
						   		<!---<a href="#" class="btn btn-primary btn1">Kayıt ol</a> ---->
						  </div>
					    </form>
				  </div>
  				</div>
			
				   <div class="clear"></div>
			  </div>
	 </div>
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
