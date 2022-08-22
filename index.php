<?php
error_reporting(0);
if (!include('dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
}
// Faltantes
$sqlfig = "SELECT * FROM figs WHERE obt = 0";
$prntfig = mysqli_query($mysql_c, $sqlfig);
// En la mano
$sqlfigm = "SELECT * FROM figs WHERE obt = 1";
$manfig = mysqli_query($mysql_c, $sqlfigm);

include ('incs/header.php');
?>
		<div class="menu">
			<a class="btnmensel">Inicio</a>
			<a class="btnmen" href="search.php">Buscador</a>
			<a class="btnmen" href="export.php">Exportar</a>
			<a class="btnmen" href="config.php">Configuración</a>
		</div>
		<div class="contenido">
			<a class="btnmob" style="display: none" onclick="memobAc()">≡</a>
				<div id="menumob" style="display: none">
					<a class="btnmen" onclick="opvenadd()">Agregar figurita</a>
					<a class="btnmen" onclick="opvenrem()">Remover figurita</a>
				</div>
				<div class="menunor">
					<a class="btnmen" onclick="opvenadd()">Agregar figurita</a>
					<a class="btnmen" onclick="opvenrem()">Remover figurita</a>
				</div>
		<div class="contfbtn">
		</div>
		<br>
		<?php if ($_GET['postadd'] == true) {
			echo "<div id='ready'>La figurita fue agregada a la lista de presentes<a class='btn' style='float:right;margin:-8px;' onclick='clready()'>X</a></div>";
		} else if ($_GET['postrem'] == true) {
			echo "<div id='ready'>La figurita fue eliminada de la lista de faltantes<a class='btn' style='float:right;margin:-8px;' onclick='clready()'>X</a></div>";
		} else if ($_GET['postext'] == true) {
			echo "<div id='error'>La figurita ya existe<a class='btn' style='float:right;margin:-8px;' onclick='clerror()'>X</a></div>";
		}else if ($_GET['remtext'] == true) {
			echo "<div id='error'>La figurita no existe<a class='btn' style='float:right;margin:-8px;' onclick='clerror()'>X</a></div>";
		}
		?>
		<hr>
			<h1>Figuritas presentes</h1>
			<h3>Todas las figuritas que ya tienes</h3>
			<div class="sobrantes">
				<ul>
				<?php
				$limcol = 0;
				$fcont = 0;
				while ($figdatm = mysqli_fetch_array($manfig)) {
						$fcont++;
					if ($limcol <= 25) {
						echo "<li>" + $figdatm['FigNum'] + "</li>";
						echo "<br />";
						$limcol++;
					} else {
						echo "<li>" + $figdatm['FigNum'] + "</li>";
						echo "</ul><ul>";
						$limcol = 0;
					}
				}
				$frest = $maxfig - $fcont;
				?>
				</ul>
			</div>
			<br>
			<hr>
			<h1>Figuritas sobrantes</h1>
			<h3>Lista con todas las figuritas faltantes</h3>
			<div class="sobrantes">
				<ul>
				<?php
				$limcol = 0;
				while ($figdat = mysqli_fetch_array($prntfig)) {
					if ($limcol <= 25) {
						echo "<li>" + $figdat['FigNum'] + "</li>";
						echo "<br />";
						$limcol++;
					} else {
						echo "<li>" + $figdat['FigNum'] + "</li>";
						echo "</ul><ul>";
						$limcol = 0;
					}
				}
				?>
				</ul>
			</div>
			<br>
				<h3>Has conseguido <?php echo $fcont ?> figuritas de un total de <?php echo $maxfig; ?>. Te faltan <?php echo $frest; ?>.</h3>
		</div>
			<div id="ventAdd" style="display:none">
				<a class="clsbtn" onclick="clvenadd()">Cerrar</a>
				<h1>Agregar nueva figurita<h1>
				<h3>Cuando consigas una, agregala a la lista de las que tenés.</h3>
				<form action="agrsubmit.php" method="POST">
					<input type="text" name="numfig">
					<input class="btn" type="submit" value="Agregar"></input>
				</form>
			</div>
			<div id="ventRem" style="display:none">
				<a class="clsbtn" onclick="clvenrem()">Cerrar</a>
				<h1>Remover figurita<h1>
				<h3>Si te falta una, agregala a la lista de faltantes.</h3>
				<form action="remsubmit.php" method="POST">
					<input type="text" name="numfig">
					<input class="btn" type="submit" value="Agregar"></input>
				</form>
			</div>
<?php include ('incs/footer.php'); ?>
