<?php
const WEB_ROOT = "/";
function printHeader() {
	?>
		<!DOCTYPE html>
		<html lang="nl">
			<head>
				<meta charset="utf-8" /> 
				<title>marijnk.nl</title>
				<link rel="shortcut icon" href="media/logos/favicon.ico" type="image/x-icon" />
				<link rel="stylesheet" href="style.css">
				<meta name="viewport" content="width=device-width, initial-scale=1">
			</head>
			<body>
				<a href="<?= WEB_ROOT ?>"><img class="logo" src="media/logos/logo.svg"/></a>
<?php
}
function printCompleteHeader() {
	printHeader();
	?>
	<div class="page" id="info">
			<main>
<?php
}
function printFooter() {
	?>
			</body>
		</html>
<?php
}
function printCompleteFooter() {
	?>
			</main>
		</div>
<?php
	printFooter();
}