<?php include ('dat/config.php');
switch ($_GET['id']) {
	case 1:
		$errcode = "1";
		$dsce = "El valor introducido no es válido";
		break;
	case 2:
		$errcode = "2";
		$dsce = 'La figurita no existe. El álbum cuenta con un total de ' . $maxfig . '.<br>Puedes cambiar el límite en la <a href="config.php" style="color:#000;">configuración</a>.';
		break;
	case 404:
		$errcode = "404";
		$dsce = "No se pudo encontrar la página solicitada.";
		break;
	default:
		$errcode = "";
		$dsce = "Error desconocido";
}
include ('incs/header.php');
?>
		<div class="menu">
			<a class="btnmen" href="index.php">Inicio</a>
			<a class="btnmen" href="search.php">Buscador</a>
			<a class="btnmen" href="export.php">Exportar</a>
			<a class="btnmen" href="config.php">Configuración</a>
		</div>
		<div class="contenido">
			<h1>Error <?php echo $errcode ?></h1>
			<h3><?php echo $dsce ?></h3>
			<a href='javascript:history.back()'><< Volver atrás</a>
			</div>
<?php include ('incs/footer.php'); ?>
