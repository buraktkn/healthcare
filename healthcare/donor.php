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
				     <li class="active"><a href="donor.php"><span>Basvuru</span></a></li>
				  
		        
				 	<div class="clear"></div>
			   </ul> 
	       </div>
	  </div>
   </div>
<!-------------Kayıt şeysi----------->
<div class="main">
	 <div class="wrap">
		<div class="section group">
				<div class="col span_2_of_3">
				   <div class="contact-form">
				  	<h3>Kayıt Formu</h3>
					    <form method="post" action="donoryeni.php">
					    	<div>
						    	<span><label>İsim</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
							<div>
						    	<span><label>Soyisim</label></span>
						    	<span><input name="userLastname" type="text" class="textbox"></span>
						    </div>
					        <div>
						    	<span><label>Yaşınız</label></span>
						    	<span><input name="userAge" type="text" class="textbox"></span>
						    </div>
							
							<div>
						   <!--- 	<span><label>Hasta mısınız? Donör mü?</label></span>
						    	<span><input name="kutu" type="radio"value="Hasta">Hasta</span>
								<span><input name="kutu" type="radio"value="Donör">Donör</span>--->
								<span><label>Cinsiyetiniz?</label></span>
								<select class="custom-select" name="customSelect">
								<option value="Kadın">Kadın</option>
								<option value="Erkek">Erkek</option>
								</select>																								

						    </div>
						    <div>
						    	<span><label>E-Mail</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>Telefon</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
							 <div>
						    	<span><label>Adres :</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						    <div>
						    	<span><label>Kan grubunuz nedir?</label></span>
								<select class="custom-select" name="custSel1">
								<option value="ARh+">ARh+</option>
								<option value="ARh-">ARh-</option>
								<option value="BRh+">BRh+</option>
								<option value="BRh-">BRh-</option>
								<option value="0Rh+">0Rh+</option>
								<option value="0Rh-">0rH-</option>
								<option value="ABRh+">ABRh+</option>
								<option value="ABRh-">ABRh-</option>
								</select>				
				
						    </div>
							<div>
						    	<span><label>Kronik bir hastalığınız var mı? Varsa aşağıdan seçiniz.</label></span>
						    	<select class="custom-select" name="customSelect2">
								<option value="Tansiyon">Tansiyon</option>
								<option value="Astım">Astım</option>
								<option value="Diyabet">Diyabet</option>
								<option value="Yok">Yok</option>
								</select>
						    </div>
							<div>
						    	<span><label>Bağışta bulunmak istediğiniz organ nedir?</label></span>	
								<select class="custom-select" name="customSelect3">
								<option value="Kalp">Kalp</option>
								<option value="Akciğer">Akciğer</option>
								<option value="Böbrek">Böbrek</option>
								<option value="Karaciğer">Karaciğer</option>
								<option value="Pankreas">Pankreas</option>
								<option value="İnce bağırsak">İnce bağırsak</option>
								</select>
						    </div>
							<div>
						    	<span><label>Lütfen sağlık raporunuzu yükleyiniz.</label></span>
						    	<span><input name="dosya" type="file" accept=".pdf/* "></span>
							
						    </div>
							
						    <div>
						   		<button id="signUpReal">Başvur</button>
						   		<!---<a href="#" class="btn btn-primary btn1">Kayıt ol</a> ---->
						  </div>
					    </form>
				  </div>
  				</div>
<div class="clear"></div>
			  </div>
	 </div>
	</div>