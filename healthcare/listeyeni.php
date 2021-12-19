<?php
include("baglan.php");

$userKangrubu = $_SESSION["kangrubux"];
$userHastalik = $_SESSION["hastalikx"];

echo $userKangrubu;
echo $userHastalik;

$readQuery = mysqli_query($baglan, "SELECT * FROM `donor` WHERE `kangrubu`='$userKangrubu' AND `hastalik`='$userHastalik'");
$readCourse = mysqli_fetch_assoc($readQuery);
if (!$readCourse) {
	echo "<script type='text/javascript'>alert('Kayıtlı Donör Bulunamadı!');
	location='./index.php';
	</script>";
}
$readQuery = mysqli_query($baglan, "SELECT * FROM `donor` WHERE `kangrubu`='$userKangrubu' AND `hastalik`='$userHastalik'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<table>
<thead>
<tr>
<th>Adı Soyadı</th>
<th>Telefon Numarası</th>
<th>Kan grubu</th>
<th>Bağışladığı organ</th>

</tr>
</thead>
<tbody>
<?php
while ($donor = mysqli_fetch_array($readQuery)) {
	echo "<tr>";
	echo "<td data-column='Adı Soyadı'>" . $donor['donorIsım'] . "</td>";
	echo "<td data-column='Telefon Numarası'>" . $donor['telefon'] . "</td>";
	echo "<td data-column='Kan grubu'>" . $donor['kangrubu'] . "</td>";
	echo "<td data-column='Bağışladığı organ'>". $donor['organ'] . "</td>";
	
	echo "</tr>";
}
?>

</tbody>
</table>


</body>
</html>



