<?php
$id=$_GET['id'];
if(!isset($_GET['id'])){$id = 'homepage';}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head> 
		<title>Chez Madeleine - B&amp;B and Apartment</title>
		
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" /> 
		<meta name="description" content="Flexible accommodation with self catering facilities. Located on the borders of Lauzun, 30 minutes from Bergerac Airport and 10 minutes from Eymet." /> 
		<meta name="keywords" content="B&amp;B, france, bnb, Chambres d’hote, gites, dordogne, holiday, vacances, bandb, b and b, eymet, b n b, bergerac, bordeaux, le sud, south of france, southern france" /> 
		<meta name="robots" content="index, follow" /> 
		<meta name="viewport" content="width=device-width">
		
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<link rel="stylesheet" media="screen" href="css/screen.css" type="text/css"/>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css' />
		<script type="text/javascript" src="http://www.google.com/jsapi?key=ABQIAAAAWBypbMm87ZhmTEqVF3xzIxSvBLkXfu2w0dwnS1JyQyV7dGHDVhTazISq3cgohEGB5Ve51Q1eztq_hQ"></script>
	</head>
<body>
<div id="container">
	<div id="header">
<!--		<div id="navbar"><?php include_once("php/navigation.php");?></div> -->
	</div>
	<div id="content">
		<?php include_once("php/$id.php");?>
	</div>
	<?php include_once("php/footer.php");?>
</div>
</body>
</html>
