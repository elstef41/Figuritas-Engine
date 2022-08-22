<?php
error_reporting(0);
if (!include('../dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
} else {
	include ('dat/config.php');
}
$sfex = "SELECT * FROM figs WHERE obt = 1";
$prsfex = mysqli_query($mysql_c, $sfex);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Exportación Figuritas Engine</title>
		<meta charset="utf-8">
		<style type="text/css">
			body {
				font-family: Arial, Helvetica, sans-serif;
				margin: 9px;
			}
			h1 {
				font-size: 20px;
				background: #4cc;
				color: #fff;
				padding: 8px;
				margin: -3px;
			}
			h3 {
				font-size: 15px;
				background: #47a;
				color: #fff;
				padding: 6px;
				margin: 6px;
			}
			ul {
				font-size: 13px;
				list-style: none;
				padding: 9px;
				display: inline-block;
			}
			br {
				margin-bottom: 4px;
			}
		</style>
	</head>
	<body>
		<div>
			<h1>Presentes</h1>
			<h3>Figuritas Engine</h3>
			<ul>
			<hr>
			<?php
				$limcol = 0;
				while ($figdat = mysqli_fetch_array($prsfex)) {
					if ($limcol <= 25) {
						echo "<li>" + $figdat['FigNum'] + "</li>";
						echo "<br />";
						$limcol++;
					} else {
						echo "<li>" + $figdat['FigNum'] + "</li>";
						echo "</ul><ul>";
						echo "<hr>";
						$limcol = 0;
					}
				}
				?>
			</ul>
		</div>
	</body>
</html>
