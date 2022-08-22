<?php include("dat/config.php");
$figname = $_POST["numfig"];
if (!is_numeric($figname)) {
	header('Location: error.php?id=1');
	die();
} else if ($figname > $maxfig || $figname < 0) {
	header('Location: error.php?id=2');
	die();
}
$figexst = mysqli_query($mysql_c, "SELECT * FROM figs WHERE FigNum=$figname AND Obt=0");
if (mysqli_num_rows($figexst) > 0) {
	header('Location: index.php?remtext=true');
	die();
} else {
	$afsql = "UPDATE figs SET Obt=0 WHERE FigNum=$figname";
	$agfig = mysqli_query($mysql_c, $afsql);
	mysqli_close($mysql_c);
	header('Location: index.php?postrem=true');
}
?>
