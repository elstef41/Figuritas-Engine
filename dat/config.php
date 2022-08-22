<?php
	$econf = array(
	"host" => "localhost",
	"user" => "usuario",
	"psw" => "contraseña",
	"db" => "figuras"
	);

	// Ocultar mensajes de error, una forma de
	// evitar inyecciones SQL.
	error_reporting(0);

	// Conexión con la base de datos
	$mysql_c = mysqli_connect($econf["host"], $econf["user"], $econf["psw"], $econf["db"]);
	if (!$mysql_c) die('No se pudo establecer conexión con la base de datos');
  $dbcfg =  mysqli_fetch_array(mysqli_query($mysql_c, "SELECT * FROM cfg"));
  $maxfig = $dbcfg[1];

	$ver = array(
		"mayor" => "0",
		"menor" => "8",
		"build" => "0"
	);
?>
