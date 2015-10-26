<!DOCTYPE html>
<html>
<head>
	<title>Live camera</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link href='https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700italic,400italic,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
    <header>
  		<?php include "header.php";?>
	</header>
	<div id="wrapper-livevideo">
    	<h1>Bandeforhold</h1>
		<div id="center">

			<p>
			Link til Mac bruger <a id="linktilmac" href="http://www.motorcrosscentrumlommel.be/webcam/foto.jpg">her</a></font>
			</p>

			<iframe frameborder="1" name="frame1" src="http://motocrosslommel.podzone.net:8000/live/pull_view.html" scrolling="no">
			</iframe>

		</div><!--center-->

		<section>
 			<div id="contentWrapperWrapper" class="main-container">
				<div id="contentWrapper" class="section main" role="main">
					<div  class="contentArea contentAreaC">
                		<div class="module border bar" ></div>
	
        				<div class="module htmlModule" >
						<img id="vejret" src="http://servlet.dmi.dk/byvejr/servlet/byvejr_dag1?by=8220&mode=long"100%" 			/cmd=snapPicture2&usr=KMCKCAM&pwd=Live&t=" onload='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()}, 2000000)' onerror='setTimeout(function() {src = src.substring(0, (src.lastIndexOf("t=")+2))+(new Date()).getTime()}, 5000)' alt='KMCK' />

						</div>
        			</div><!--contentArea contentAreaC-->
    				<div  class="contentArea contentAreaD">
        				<div class="module htmlModule" >
							<div id="cont_7ebd8c93d55e0e1730eaaab9386b129b">
  								<span id="h_7ebd8c93d55e0e1730eaaab9386b129b"><a href="http://www.theweather.com/brabrand.htm" target="_blank">Vejret i Brabrand</a>
                                </span>
  								<script type="text/javascript" src="http://www.theweather.com/wid_loader/7ebd8c93d55e0e1730eaaab9386b129b"></script>
							</div><!--cont_7ebd8c93d55e0e1730eaaab9386b129b-->

						</div><!--module htmlModule-->
        			</div><!--contentArea contentAreaD-->
    				<div  class="contentArea contentAreaB"></div>
    				<div  class="contentArea contentAreaC"></div>
				</div><!--contentWrapper-->

			</div><!--contentWrapperWrapper-->
 		</section>
	</div><!--wrapper-->
    <div id="wheel"></div><!--wheel-->
	<footer>
    	<?php include "footer.php";?>
	</footer>
</body>
</html>


