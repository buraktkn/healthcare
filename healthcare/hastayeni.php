<?php
include("baglan.php");
$uFirstName = $_POST["userName"];
$uLastName = $_POST["userLastname"];
$uYas = $_POST["userAge"];
$uCinsiyet = $_POST["customSelect"];
$emailSignIn = $_POST["userEmail"];
$userTelefon = $_POST["userPhone"];
$userAdres = $_POST["userMsg"];
$userKangrubu = $_POST["custSel1"];
$userHastalik = $_POST["customSelect2"];
$userOrgan = $_POST["customSelect3"];
$userRapor = $_POST["dosya"];

if (empty($uFirstName) || empty($uLastName) ||empty($uYas) || empty($uCinsiyet) ||empty($emailSignIn) ||empty($userTelefon) || empty($userAdres)|| empty($userKangrubu)|| empty($userHastalik)|| empty($userOrgan)) {
  echo "<script type='text/javascript'>alert('Fill in the blanks');
   location='hasta.php';
   </script>";
} else {
		$readUser = mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM hasta where email='$emailSignIn'"));
		if ($readUser) {
			echo "<script type='text/javascript'>alert('This user already added!');
			location='hasta.php';
			</script>";
	} else {
			$addUser = mysqli_query($baglan, "INSERT INTO `hasta` (`hastaIsim`, `hastaSoyisim`, `yas`, `cinsiyet`, `email`, `telefon`, `adres`, `kangrubu`, `hastalik`, `organ`, `rapor`) VALUES ('$uFirstName', '$uLastName','$uYas','$uCinsiyet','$emailSignIn', '$userTelefon', '$userAdres','$userKangrubu','$userHastalik','$userOrgan','$userRapor')");
			if ($addUser) {
		        $readDonor = mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM `donor` WHERE `kangrubu`='$userKangrubu' AND `organ`='$userOrgan'"));
				if ($readDonor) {
					header('Location:liste.php');
				} else {
					echo "<script type='text/javascript'>alert('Uyumlu Donör Bulunamadı, Kaydınız Oluşturuldu');
					location='hasta.php';
					</script>";
				}

			} else {
				echo "<script type='text/javascript'>alert('This user cannot be added to DB!');
				location='hasta.php';
				</script>";
				}
	
			}			
			}
?>
    
