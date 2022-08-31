<?php
if (!include('dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
}

include ('incs/header.php');
?>
		<div class="menu">
			<a class="btnmen" href="index.php">Inicio</a>
			<a class="btnmen" href="search.php">Buscador</a>
			<a class="btnmensel">Exportar</a>
			<a class="btnmen" href="config.php">Configuración</a>
		</div>
		<div class="contenido">
			<h1>Exportar datos</h1>
			<a>Esta herramienta te permite ver una tabla con las figuritas consultadas en formato HTML, simple y diseñada para impresión, entre otras cosas.</a>
			<br>
			<br>
			<a>Puedes optar entre la versión con estilos (CSS) o solamente HTML.</a>
			<hr>
			<h3>Tabla de faltantes</h3>
			<a class="btn" href="tools/expr.php">Con estilos</a><a class="btn" href="tools/expr-nocss.php">Sin estilos</a><br><br>
			<h3>Tabla de presentes</h3>
			<a class="btn" href="tools/expp.php">Con estilos</a><a class="btn" href="tools/expp-nocss.php">Sin estilos</a><br><br>
		</div>
<?php include ('incs/footer.php'); ?>
