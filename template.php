<?php
const WEB_ROOT = "/2zqa/marijn-kok/";
function printHeader() {
	?>
		<!DOCTYPE html>
		<html lang="nl">
			<head>
				<meta charset="utf-8" /> 
				<title>marijn-kok.nl</title>
				<link rel="stylesheet" href="style.css">
				<meta name="viewport" content="width=device-width, initial-scale=1">
			</head>
			<body>
				<a href="<?= WEB_ROOT ?>"><img class="logo" src="icons/logo.svg"/></a>
<?php
}
function printCompleteHeader() {
	printHeader();
	?>
	<div class="page" id="info">
			<main class="">
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