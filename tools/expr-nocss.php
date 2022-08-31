<?php
if (!include('../dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
} else {
	include ('dat/config.php');
}

$sfex = "SELECT * FROM figs WHERE obt = 0";
$prsfex = mysqli_query($mysql_c, $sfex);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<title>Exportación Figuritas Engine</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
		<h1>Faltantes - Figuritas Engine</h1>
			<table cellspacing="6">
				<tr>
				<?php
					$limcol = 0;
					while ($figdat = mysqli_fetch_array($prsfex)) {
						if ($limcol <= 25) {
							echo "<td>".$figdat['FigNum']."</td>";
							$limcol++;
						} else {
							echo "<td>".$figdat['FigNum']."</td>";
							echo "</tr><tr>";
							$limcol = 0;
						}
					}
				?>
			</tr>
			</table>
		</div>
	</body>
</html>
