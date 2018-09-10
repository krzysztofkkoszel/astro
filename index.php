<!DOCTYPE html>
<html>

<head>
	<title>Kosmiczny Mechanik</title>
	<?php include 'head.php';?>
</head>

<body>
	<?php include 'nav.php';?>
	
	<div id="container">
	
	<main id="content1">
		<p id="welcome">Witam na mojej stronie poświęconej fotografii nocnej. Znajdziesz tu trochę teorii, informacji 
		o niezbędnym sprzęcie i koniecznych warunkach atmosferycznych oraz przykładowe zdjęcia.</p>
		<p id="sign">Kosmiczny Mechanik</p>
		<div class="lightbox">
				<a href="#backm" class="lightbox" id="imgm"><img src="images/gal1.jpg"></a>
		</div>		
	</main>
	
	<aside id="content2">
		<a href="#imgm" id="backm"><img class="respImg" src="images/gal1.jpg"/></a>
	</aside>
	
	</div>
	
	<?php include 'footer.php';?>
</body>

</html>