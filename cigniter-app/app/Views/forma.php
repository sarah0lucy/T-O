<!DOCTYPE HTML>

<html>
	<head>
		<title>Proiect 2_pascal.otilia </title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="<?php echo base_url('/') ?>">Welcome!</a></li>
							<li><a href="<?php echo base_url('/home') ?>">Home</a></li>
							<li><a href="<?php echo base_url('/pagina1') ?>">Haine</a></li>
							<li><a href="<?php echo base_url('/pagina2') ?>">Incaltaminte</a></li>
							<li><a href="<?php echo base_url('/pagina3') ?>">Accesorii</a></li>
							
							

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
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>Site de inchiriere haine si imbracaminte</h1>
							<p>Bun venit pe siteul nostru. Ai facut o alegere excelenta!<br />
							Sustinem sustenabilitatea bla bla...</p>
							<ul class="actions">
								<li><a href="<?php echo base_url('/home') ?>" class="button scrolly">Vezi oferte</a></li>
								<li><a href="<?php echo base_url('/about') ?>" class="button scrolly">Vezi despre</a></li>

							</ul>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
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
