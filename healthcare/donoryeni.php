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
   location='donor.php';
   </script>";
} else {
		$readUser = mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM donor where email='$emailSignIn'"));
		if ($readUser) {
			echo "<script type='text/javascript'>alert('Kaydınız Daha Önce Oluşturulmuş.');
			location='donor.php';
			</script>";
	} else {
			$addUser = mysqli_query($baglan, "INSERT INTO `donor` (`donorIsim`, `donorSoyisim`, `yas`, `cinsiyet`, `email`, `telefon`, `adres`, `kangrubu`, `hastalik`, `organ`, `rapor`) VALUES ('$uFirstName', '$uLastName','$uYas','$uCinsiyet','$emailSignIn', '$userTelefon', '$userAdres','$userKangrubu','$userHastalik','$userOrgan','$userRapor')");
			if ($addUser) {
		       	$_SESSION["kangrubux"] = $userKangrubu;
		       	$_SESSION["hastalikx"] = $userHastalik;

				if ($readDonor) {
					header('Location:donor.php');
				} else {
					echo "<script type='text/javascript'>alert(' Kaydınız Oluşturuldu');
					location='donor.php';
					</script>";
				}

			} else {
				echo "<script type='text/javascript'>alert('This user cannot be added to DB!');
				location='donor.php';
				</script>";
				}
	
			}			
			}
?>
    