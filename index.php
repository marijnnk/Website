<?php
require "template.php";
printHeader() ?>
		<header>
			<h1>Marijn Kok</h1>
		</header>
		<a class="chevron iconlink" onclick="return scrollToInfo()" href="#info"><i class="fas fa-chevron-down fa-3x"></i></a>
		<div class="page homepage" id="info">
			<main>
				<h2>Sup.</h2>
				<div class="wrapper">
					<article id="one">
						<h3>Ik</h3>
						<p>
							<img class="photo" src="images/marijn.jpg"/>Hoi! Ik ben Marijn, student Medisch Beeldvormende en Radiotherapeutische Technieken aan de Hanzehogeschool in Groningen. Ik ben groot fan van techniek, waaronder mechanische toetsenborden, de Raspberry Pi en Android. Verder werk ik graag aan creatieve dingen, digitaal of niet. Ik doe 
							
							aak gebruik van Cinema 4D om 3D-computergraphics te ontwerpen. Een paar van mijn ontwerpen kun je vinden in de <a href="galerij.php">galerij</a>. Verder pas ik vaak mijn apparaten waar ik mee werk exact aan naar mijn smaak, zodat ik ze optimaal kan gebruiken. Deze site is zelf gemaakt.
						</p>
					</article>
					<article id="two">
						<h3>Anders nog iets?</h3>
						<p class="joke">Wat links... ook al staan ze rechts</p>
						 <ul>
							<li><a href="galerij.php"><i class="fas fa-image"></i> Galerij</a></li>
							<li><a href="https://rutgerkok.nl/minecraft/"><i class="fas fa-cube"></i> Wereldbouw</a></li>
							<li><a href="copyright.php"><i class="fas fa-copyright"></i> Copyright en credits</a></li>
						</ul> 
					</article>
				</div>
			</main>
			<footer>
				<p>Je kan me bereiken via e-mail. <a href="mailto:someone@example.com" class="button"><i class="fas fa-paper-plane"></i> Groetjes!</a></p>
			</footer>
		</div>
	<script src="scroll.js"></script>
<?php printFooter() ?>