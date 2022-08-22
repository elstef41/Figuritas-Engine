<?php
error_reporting(0);

if (!include('dat/config.php')) {
	die("<h1>No se ha encontrado config.php</h1>\n<a>Puede que aun no hayas instalado Figuritas Engine.</a>");
}
include ('incs/header.php');
?>
		<div class="menu">
			<a class="btnmen" href="index.php">Inicio</a>
			<a class="btnmen" id="btnbusq" onclick="opbusq()">Buscador</a>
			<a class="btnmen" id="cbusq" style="display: none;" onclick="clbusq()">Cerrar</a>
			<a class="btnmen" href="export.php">Exportar</a>
			<a class="btnmen" href="config.php">Configuración</a>
		</div>
		<div id="busq" style="display:none">
			<h6>Busca una figurita:</h6>
		</div>
		<div class="contenido">
					<h2>Busca una figurita:</h2>
					<a>Para consultar, escribe su número y pulsa Intro</a><br>
					<input type="text" id="boxnum" onkeyup="enterP(boxnum, event)"><br>
				<a id="existentes"></a>
		</div>
<?php include ('incs/footer.php'); ?>
