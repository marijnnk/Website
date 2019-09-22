<?php
require "../template.php";
printCompleteHeader() ?>

	<h2><a class="iconlink" href="<?= WEB_ROOT ?>"><i class="fas fa-caret-left"></i></a>Gallerij</h2>

	<div class="img-wrapper">
		<a href="media/gallery/nexus4.jpg" download>
			<div style="background-image: url(media/gallery/thumbnails/nexus4-thumbnail.jpg)"></div>
		</a>
	</div><!--commenting here to remove whitespace node... grrr
 --><div class="img-wrapper">
		<a href="media/gallery/planck.jpg" download>
			<div style="background-image: url(media/gallery/thumbnails/planck-thumbnail.jpg)"></div>
		</a>
	</div>
	<div class="img-wrapper">
		<a href="media/gallery/nokia.jpg" download>
			<div style="background-image: url(media/gallery/thumbnails/nokia-thumbnail.jpg)"></div>
		</a>
	</div><!--commenting here to remove whitespace node... grrr
 --><div class="img-wrapper">
		<a href="media/gallery/RGBRun.jpg" download>
			<div style="background-image: url(media/gallery/thumbnails/RGBRun-thumbnail.jpg)"></div>
		</a>
	</div>
	<div class="img-wrapper">
		<a href="media/gallery/wonderland.jpg" download>
			<div style="background-image: url(media/gallery/thumbnails/wonderland-thumbnail.jpg)"></div>
		</a>
	</div><!--commenting here to remove whitespace node... grrr
 --><div class="img-wrapper">
		<a href="media/gallery/macropi.jpg" download>
			<div class="img-bottom" style="background-image: url(media/gallery/thumbnails/macropi-thumbnail.jpg)"></div>
		</a>
	</div>
	<?php printCompleteFooter() ?>