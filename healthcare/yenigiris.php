<?php
include("baglan.php");
$emailSignIn=$_POST["userEmail"];
$passwordSignIn=$_POST["password"];
if (empty($emailSignIn) || empty($passwordSignIn)) {
   echo "<script type='text/javascript'>alert('Fill in the blanks');
   location='giris.php';
   </script>";
} else { 
	$readUser = mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM users where userMail='$emailSignIn' and password='$passwordSignIn'"));
		if ($readUser){
			$userType=$readUser["accountType"];
			if ($userType == 'Hasta') {
				$_SESSION["kangrubux"] = $readUser["kangrubu"];
		       	$_SESSION["hastalikx"] = $readUser["hastalik"];
				header('Location:hasta.php');
			} else if ($userType == 'Donor') {
				header('Location:donor.php');
			} 
		}
		 else {
			echo "<script type='text/javascript'>alert('Wrong User Name or Password');
			location='giris.php';
			</script>";
		}
}

?>