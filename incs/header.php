<?php
require ('dat/config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="resources/styles.css" media="screen and (min-width:600px)">
		<link rel="stylesheet" type="text/css" href="resources/mst.css" media="screen and (max-width:599px)">
		<script src="resources/scripts.js"></script>
		<link href="figeng.ico" rel="icon" type="image/x-icon">
		<meta charset="utf-8">
		<title>Figuritas Engine <?php echo $ver["mayor"] . "." . $ver["menor"] . "." . $ver["build"]; ?></title>
	</head>
	<body>
		<div class="header">
			<img src="figeng.png" style="position:absolute;top:20px;" width="48px">
			<h1 style="padding-left:60px;">Figuritas Engine <?php echo $ver["mayor"] . "." . $ver["menor"] . "." . $ver["build"]; ?></h1>
		</div>
