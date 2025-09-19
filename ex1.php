<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.footer {
			background-color: lightblue;
			position: fixed;
			left:0;
			bottom:0;
			width: 100%;
			height: 3em;
			text-align: center;
			padding-top: 1em;
		}
	</style>
</head>
<body>

<h1>hola</h1>
<?php
# codi PHP per mostrar els errors al browser
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	echo "això està fet amb PHP";
?>

<div class="footer">Footer</div>

</body>
</html>
