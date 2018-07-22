<?php
const WEB_ROOT = "/2zqa/marijn-kok/";
function printHeader() {
	?>
		<!DOCTYPE html>
		<html lang="nl">
			<head>
				<title>marijn-kok.nl</title>
				<link rel="stylesheet" href="style.css">
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta charset="utf-8" /> 
			</head>
			<body>
				<a href="<?= WEB_ROOT ?>"><img class="logo" src="icons/logo.svg"/></a>
<?php
}
function printCompleteHeader() {
	printHeader();
	?>
	<div class="page center" id="info">
			<main class="center">
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