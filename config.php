<?php
if (!include('dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
}
$errid = 0;
if ($_POST) {
	if ($_POST["resfig"]) {
		mysqli_query($mysql_c, "DELETE from figs WHERE id BETWEEN 0 AND 2500");
		$i = 0;
		$maxcant = 256;
	$cfgsql = "UPDATE cfg SET val = 256 WHERE id = 0";
	} else {
		$precant = $maxfig;
		$maxcant = $_POST["maxfig"];
		if ($maxcant > 2500 || $maxcant < 1) {
			$errid = 1;
			$errcont = "El límite es de entre 1 y 2500";
		} elseif (!is_numeric($_POST["maxfig"])) {
			$errid = 1;
			$errcont = "No escribiste un número";
		} else {
				if ($precant < $maxcant) {
					while ($precant <= $maxcant) {
						mysqli_query($mysql_c, "INSERT INTO figs VALUES ($precant, $precant, 0)");
						$precant++;
					}
				} else {
					mysqli_query($mysql_c, "DELETE from figs WHERE id BETWEEN $maxcant AND $precant");
					$i = 0;
					while ($i <= $maxcant) {
						mysqli_query($mysql_c, "INSERT INTO figs VALUES ($i, $i, 0)");
						$i++;
					}
			}
		$cfgsql = "UPDATE cfg SET val = $maxcant WHERE id = 0";
	}
	}
		$cfgsqlqapp = mysqli_query($mysql_c, $cfgsql);
		mysqli_close($mysql_c);
}
include ('incs/header.php');
?>
		<div class="menu">
			<a class="btnmen" href="index.php">Inicio</a>
			<a class="btnmen" href="search.php">Buscador</a>
			<a class="btnmen" href="export.php">Exportar</a>
			<a class="btnmensel">Configuración</a>
		</div>
		<div class="contenido">
		<?php if ($errid) {
			echo "<div id='error'>" . $errcont . "<a class='btn' style='float:right;margin:-8px;' onclick='clerror()'>X</a></div>";
		}
		?>
			<h1>Configuración</h1>
			<a>Número máximo de figuritas:</a>
			<form action="config.php" method="POST">
				<input type="text" name="maxfig"><br>
				<input class="btn" type="submit" value="Cambiar"></input>
			</form>
			<hr>
			<br>
			<form action="config.php" method="POST">
				<input class="btn" name="resfig" type="submit" value="Reestablecer figuritas"></input>
			</form>
			<br>
			<br>
		</div>
<?php include ('incs/footer.php'); ?>
