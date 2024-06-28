<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sign in / Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

        <style>
        	canvas {
        	    border: 1px solid black;
        	}
        	svg {
        	    border: 1px solid black;
        	    width: 200px;
        	    height: 200px;
        	}
    	</style>
        

	</head>
	<body class="is-preload">



    	<!-- Header -->
		<header id="header">
				<nav>
					<ul>
					        <li><a href="<?php echo base_url('/') ?>">Welcome!</a></li>
							<li><a href="<?php echo base_url('/home') ?>">Home</a></li>
							<li><a href="<?php echo base_url('/pagina1') ?>">Haine</a></li>
							<li><a href="<?php echo base_url('/pagina2') ?>">Incaltaminte</a></li>
							<li><a href="<?php echo base_url('/pagina3') ?>">Accesorii</a></li>
						
					</ul>
				</nav>
			</header>
            <br><br>





<div class="split">
	<section>
<section class="image fit">
	<h2>YouTube</h2>
    	<?php $youtubeVideoId = 'NKXHQpqgF4w'; 
    		  $embedUrl = 'https://www.youtube.com/embed/' . $youtubeVideoId;
			  echo '<iframe width="560" height="315" src="' . $embedUrl . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
		?>	
</section>
	<section class="image fit">
	<h2>UAIC Google Maps</h2>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2712.15700372327!2d27.568929076820933!3d47.17436251772496!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40cafb61a84b43d7%3A0xf8b4359103bc5f08!2sCorp%20A%20UAIC%2C%20Bulevardul%20Carol%20I%2011%2C%20Ia%C8%99i%20700506!5e0!3m2!1sro!2sro!4v1716151231324!5m2!1sro!2sro" 
		width="600" height="315" style="border:0;" 
		allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</section>
</section>

<section>
	<section class="field half"> 
			<h2>Video MP4</h2>
				<?php $videoFile = 'MP/video.mp4';
				if (file_exists($videoFile)) {
					echo '<video width="640" height="315" controls> <source src="' . $videoFile . '" type="video/mp4"></video>';
				}
				?>
	</section>

	<section class="field half">
		<h2>Audio MP3</h2>
    		<?php $audioFile = 'MP/MP3.mp3';
    			if (file_exists($audioFile)) {
    				echo '<audio controls> <source src="' . $audioFile . '" type="audio/mpeg"> </audio>';
    			}
    			?>	
	</section>

	<section class="image fit">
	<h2> Canvas si svg : </h2>
        <section>
    		<h3>Canvas</h3>
    			<?php echo '<canvas id="myCanvas" width="400" height="400"></canvas>';?>
			<h3>SVG</h3>
    			<?php echo '<svg id="mySvg" width="200" height="200"><circle cx="100" cy="100" r="50" stroke="black" stroke-width="3" fill="red" /> </svg>';?>
					<script>
    					const canvas = document.getElementById('myCanvas');
    					const ctx = canvas.getContext('2d');

    					// Desenează un dreptunghi albastru pe canvas
    					ctx.fillStyle = 'blue';
    					ctx.fillRect(50, 50, 300, 300);
    				</script>
		</section>
        
       
	</section>
</section>
</div>


	<!-- Footer -->
    <footer id="footer" class="wrapper alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

						
		</body>
	</html>