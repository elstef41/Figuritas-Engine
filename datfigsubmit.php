<?php include("dat/config.php");
$figname = $_GET["fig"];
if (!is_numeric($figname)) {
	mysqli_close($mysql_c);
	die("El valor introducido no es válido");
} else if ($figname > $maxfig) {
	mysqli_close($mysql_c);
	die('La figurita no existe. El álbum cuenta con un total de ' . $maxfig . '. Puedes cambiar ese límite en la <a href="config.php" style="color:#000;">configuración</a>.');
}
$afsql = "SELECT * FROM figs WHERE FigNum=$figname";
$resfig = mysqli_query($mysql_c, $afsql);
$rfg = mysqli_fetch_array($resfig);
switch ($rfg["Obt"]) {
	case 0:
		echo "<b>$figname</b>: Te falta";
		break;
	case 1:
		echo "<b>$figname</b>: Ya la tienes";
		break;
	default:
		echo "Ninguno.";
}
mysqli_close($mysql_c);
?>
