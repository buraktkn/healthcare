<?php
include("baglan.php");
$emailSignIn = $_POST["userEmail"];
$uFirstName = $_POST["userName"];
$uLastName = $_POST["userLastname"];
$uPassword = $_POST["password"];
$userType = $_POST["customSelect"];

if (empty($uFirstName) || empty($uLastName) || empty($emailSignIn) || empty($uPassword)) {
   echo "<script type='text/javascript'>alert('Fill in the blanks');
   location='kayit.php';
   </script>";
} else {
		$readUser = mysqli_fetch_assoc(mysqli_query($baglan, "SELECT * FROM users where userMail='$emailSignIn'"));
		if ($readUser) {
			echo "<script type='text/javascript'>alert('This user already added!');
			location='kayit.php';
			</script>";
	} else {
			$addUser = mysqli_query($baglan, "INSERT INTO `users` (`firstName`, `lastName`, `userMail`, `password`, `accountType`) VALUES ('$uFirstName', '$uLastName', '$emailSignIn', '$uPassword', '$userType')");
			if ($addUser) {
				 if ($userType == 'Hasta') {
					header('Location:hasta.php');
				} else if ($userType == 'Donor') {
					header('Location:donor.php');
				}

			 else {
				echo "<script type='text/javascript'>alert('This user cannot be added to DB!');
				location='kayit.php';
				</script>";
			}
	
	}			
			}
}
    

?>