<!DOCTYPE html>
<html>
<head>
	<title>Grimhøj Motocross</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700italic,400italic,700' rel='stylesheet' type='text/css'>
</head>
<body>
		<header>
    		<?php include "header.php";?>
    	</header>
        <video id="film1" controls autoplay controls loop>
  		<source src="video/grimhoj-motocross-video.mp4" type="video/mp4">
		</video><!--film1-->
		<main>
            <section id="billedemenu">
            		<section class="billedemenu1">
                    	<a href="#"> <img src="images/tilmelding.jpg" alt="Tilmelding"/> </a>
                		<a href="#"><h3>Priser og Tilmelding</h3></a>
                    </section><!--billedemenu-->
                	<section class="billedemenu">
                        <a href="tider.php"> <img src="images/tider.jpg" alt="Hold og tider"/> </a>
                		<a href="tider.php"><h3>Hold og tider</h3></a>
                	</section><!--billedemenu-->
                    <section class="billedemenu">	
                        <a href="livevideo.php"> <img src="images/baneforhold.jpg" alt="Baneforhold"/> </a>
                		<a href="livevideo.php"><h3>Baneforhold</h3></a>
                    </section><!--billedemenu-->    
            </section><!--billedemenu-->
		</main>
    	<footer>
    		<?php include "footer.php";?>
    	</footer>
</body>
</html>


