<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>

	</head>
	<body class="is-preload">



				<!-- Header -->
				<header id="header">			
				<nav>
					<ul>
						<li><a href="<?php echo base_url('/') ?>">Welcome!</a></li>
						<?php
									if(!isset($_COOKIE['username']) && !isset($_COOKIE['password'])) {
								?>
								<li><a href="<?php echo base_url('/pagina4') ?>" style="color:pink">Sign Up</a></li>
								<li><a href="<?php echo base_url('/login') ?>" style="color:coral">Log In</a></li>
								<?php
									} elseif (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
								?>
								<li><a href="<?php echo base_url('/logout') ?>" style="color:brown">Log Out</a></li>
								<?php
									}
						?>
						
					</ul>
				</nav>
			</header>


	<!-- One -->
		<section id="one" class="wrapper style2 spotlights">
						<section>
							<a href="<?php echo base_url('/home') ?>" class="image"><img src="images/P1.jpg" alt="" data-position="center center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Haine</h2>
									<p>Alege dintr o gama larga de haine.</p>
									<ul class="actions">
										<li><a href="<?php echo base_url('/pagina1') ?>" class="button">Rasfoieste</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="home.php" class="image"><img src="images/P2.jpg" alt="" data-position="top center" /></a>
							<div class="content">
								<div class="inner">
									<h2>Incaltaminte</h2>
									<p>Alege dintr o gama larga de incaltaminte.</p>
									<ul class="actions">
										<li><a href="<?php echo base_url('/pagina2') ?>" class="button"> Rasfoieste</a></li>
									</ul>
								</div>
							</div>
						</section>
						<section>
							<a href="home.php" class="image"><img src="images/P3.jpg" alt="" data-position="25% 25%" /></a>
							<div class="content">
								<div class="inner">
									<h2>Accesorii</h2>
									<p>Alege dintr o gama larga de accesorii.</p>
									<ul class="actions">
										<li><a href="<?php echo base_url('/pagina3') ?>" class="button"> Rasfoieste</a></li>
									</ul>
								</div>
							</div>
						</section>
					</section>



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